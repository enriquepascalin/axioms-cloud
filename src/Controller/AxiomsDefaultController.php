<?php
/**
 * AXIOMS CLOUD
 *
 * SPDX-License-Identifier: Apache-2.0 
 * © 2025 by Enrique Regis Pascalin Romo <enrique.pascalin@proton.me>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *     http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace App\Controller;

use App\Repository\AxiomRepository;
use App\Repository\DownloadRepository;
use App\Repository\GlossaryTermRepository;
use App\Repository\ProjectRepository;
use App\Repository\ResourceRepository;
use App\Repository\SpecVersionRepository;
use App\Repository\SpecificationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AxiomsDefaultController extends AbstractController
{
    #[Route('/', name: 'app_axioms_default', methods: ['GET'])]
    public function index(
        AxiomRepository $axioms,
        ProjectRepository $projects,
        ResourceRepository $resources,
        SpecVersionRepository $versions,
        SpecificationRepository $specs
    ): Response {
        // Featured axioms (boolean column mapped as isFeatured)
        $featuredAxioms = $axioms->findBy(['isFeatured' => true], ['code' => 'ASC'], 8);

        // Ecosystem projects (alphabetical)
        $ecosystemsProjects = $projects->findBy([], ['name' => 'ASC'], 12);

        // Latest spec version(s) for hero/CTA (newest by releaseDate desc, then version)
        $latestVersions = $versions->findBy([], ['releaseDate' => 'DESC', 'version' => 'DESC'], 3);

        // Spotlight resources (most recent first)
        $latestResources = $resources->findBy([], ['created_at' => 'DESC'], 6);

        // Current specification (e.g., the one with a defaultVersion set)
        $currentSpec = $specs->findOneBy([]); // if you have only one spec for the site

        return $this->render('web/index.html.twig', [
            'featured_axioms'     => $featuredAxioms,
            'ecosystems_projects' => $ecosystemsProjects,
            'latest_versions'     => $latestVersions,
            'latest_resources'    => $latestResources,
            'current_spec'        => $currentSpec,
        ]);
    }

    #[Route('/spec', name: 'app_web_spec', methods: ['GET'])]
    public function spec(
        SpecificationRepository $specs,
        DownloadRepository $downloads,
        ResourceRepository $resources
    ): Response {
        // Single public spec for the site
        $spec = $specs->findOneBy([]); // adjust if you choose to address by slug later
        $defaultVersion = $spec?->getDefaultVersion();

        $versionDownloads = $defaultVersion
            ? $downloads->findBy(['specVersion' => $defaultVersion], ['label' => 'ASC'])
            : [];

        $relatedResources = $defaultVersion
            ? $resources->findBy(['specVersion' => $defaultVersion], ['created_at' => 'DESC'], 12)
            : [];

        return $this->render('web/spec.html.twig', [
            'spec'              => $spec,
            'default_version'   => $defaultVersion,
            'version_downloads' => $versionDownloads,
            'related_resources' => $relatedResources,
        ]);
    }

    #[Route('/spec/catalogue', name: 'app_web_spec_catalogue', methods: ['GET'])]
    public function specCatalogue(Request $request, SpecVersionRepository $versions, SpecificationRepository $specs): Response
    {
        $spec = $specs->findOneBy([]);
        $page  = max(1, (int) $request->query->get('page', 1));
        $limit = min(50, max(1, (int) $request->query->get('limit', 20)));
        $offset = ($page - 1) * $limit;

        $items = $versions->findBy(['specification' => $spec], ['releaseDate' => 'DESC', 'version' => 'DESC'], $limit, $offset);

        // If you want a total count without adding a custom repo, do a cheap count via findBy then count():
        $total = count($versions->findBy(['specification' => $spec]));

        return $this->render('web/spec_catalogue.html.twig', [
            'spec'     => $spec,
            'versions' => $items,
            'page'     => $page,
            'limit'    => $limit,
            'total'    => $total,
        ]);
    }

    #[Route('/axioms', name: 'app_web_axioms', methods: ['GET'])]
    public function axioms(
        SpecificationRepository $specs,
        DownloadRepository $downloads,
        ResourceRepository $resources
    ): Response {
        // Single public spec for the site
        $spec = $specs->findOneBy([]); // adjust if you choose to address by slug later
        $defaultVersion = $spec?->getDefaultVersion();

        $versionDownloads = $defaultVersion
            ? $downloads->findBy(['specVersion' => $defaultVersion], ['label' => 'ASC'])
            : [];

        $relatedResources = $defaultVersion
            ? $resources->findBy(['specVersion' => $defaultVersion], ['created_at' => 'DESC'], 12)
            : [];

        return $this->render('web/axioms.html.twig', [
            'spec'              => $spec,
            'default_version'   => $defaultVersion,
            'version_downloads' => $versionDownloads,
            'related_resources' => $relatedResources,
        ]);
    }

    #[Route('/axioms/detail', name: 'app_web_axioms_detail', methods: ['GET'])]
    public function axiomDetails(Request $request, SpecVersionRepository $versions, SpecificationRepository $specs): Response
    {
        $spec = $specs->findOneBy([]);
        $page  = max(1, (int) $request->query->get('page', 1));
        $limit = min(50, max(1, (int) $request->query->get('limit', 20)));
        $offset = ($page - 1) * $limit;

        $items = $versions->findBy(['specification' => $spec], ['releaseDate' => 'DESC', 'version' => 'DESC'], $limit, $offset);

        // If you want a total count without adding a custom repo, do a cheap count via findBy then count():
        $total = count($versions->findBy(['specification' => $spec]));

        return $this->render('web/axiom_details.html.twig', [
            'spec'     => $spec,
            'versions' => $items,
            'page'     => $page,
            'limit'    => $limit,
            'total'    => $total,
        ]);
    }

    #[Route('/blog', name: 'app_web_blog', methods: ['GET'])]
    public function blog(
        SpecificationRepository $specs,
        DownloadRepository $downloads,
        ResourceRepository $resources
    ): Response {
        // Single public spec for the site
        $spec = $specs->findOneBy([]); // adjust if you choose to address by slug later
        $defaultVersion = $spec?->getDefaultVersion();

        $versionDownloads = $defaultVersion
            ? $downloads->findBy(['specVersion' => $defaultVersion], ['label' => 'ASC'])
            : [];

        $relatedResources = $defaultVersion
            ? $resources->findBy(['specVersion' => $defaultVersion], ['created_at' => 'DESC'], 12)
            : [];

        $blog = [
            'title'       => 'AXIOMS Cloud Blog',
            'description' => 'Latest news, updates, and articles about AXIOMS Cloud and its ecosystem.',
        ];

        return $this->render('web/blog.html.twig', [
            'blog'              => $blog,
        ]);
    }

    #[Route('/blog/details', name: 'app_web_blog_details', methods: ['GET'])]
    public function blogDetails(Request $request, SpecVersionRepository $versions, SpecificationRepository $specs): Response
    {
        $spec = $specs->findOneBy([]);
        $page  = max(1, (int) $request->query->get('page', 1));
        $limit = min(50, max(1, (int) $request->query->get('limit', 20)));
        $offset = ($page - 1) * $limit;

        $items = $versions->findBy(['specification' => $spec], ['releaseDate' => 'DESC', 'version' => 'DESC'], $limit, $offset);

        // If you want a total count without adding a custom repo, do a cheap count via findBy then count():
        $total = count($versions->findBy(['specification' => $spec]));

        return $this->render('web/blog_details.html.twig', [
            'spec'     => $spec,
            'versions' => $items,
            'page'     => $page,
            'limit'    => $limit,
            'total'    => $total,
        ]);
    }


    #[Route('/projects', name: 'app_web_projects', methods: ['GET'])]
    public function projects(ProjectRepository $projects): Response
    {
        return $this->render('web/projects.html.twig', [
            'projects' => $projects->findBy([], ['name' => 'ASC']),
        ]);
    }

    #[Route('/resources', name: 'app_web_resources', methods: ['GET'])]
    public function resources(ResourceRepository $resources): Response
    {
        $featured = $resources->findBy([], ['featureOrder' => 'ASC'], 12);
        $latest   = $resources->findBy([], ['created_at' => 'DESC'], 24);

        return $this->render('web/resources.html.twig', [
            'featured_resources' => $featured,
            'latest_resources'   => $latest,
        ]);
    }

    #[Route('/glossary', name: 'app_web_glossary', methods: ['GET'])]
    public function glossary(GlossaryTermRepository $terms): Response
    {
        return $this->render('web/glossary.html.twig', [
            'terms' => $terms->findBy([], ['term' => 'ASC']),
        ]);
    }

    // --- Legal / Marketing pages (static content with room for dynamic bits) ---

    #[Route('/about', name: 'app_web_about', methods: ['GET'])]
    public function about(SpecificationRepository $specs): Response
    {
        return $this->render('web/about.html.twig', [
            'current_spec' => $specs->findOneBy([]),
        ]);
    }

    #[Route('/team', name: 'app_web_team', methods: ['GET'])]
    public function team(): Response
    {
        return $this->render('web/team.html.twig');
    }

    #[Route('/downloads', name: 'app_web_downloads', methods: ['GET'])]
    public function downloads(SpecificationRepository $specs, DownloadRepository $downloads): Response
    {
        $spec = $specs->findOneBy([]);
        $defaultVersion = $spec?->getDefaultVersion();

        return $this->render('web/downloads.html.twig', [
            'spec'              => $spec,
            'default_version'   => $defaultVersion,
            'version_downloads' => $defaultVersion ? $downloads->findBy(['specVersion' => $defaultVersion], ['label' => 'ASC']) : [],
        ]);
    }

    #[Route('/privacy', name: 'app_web_privacy', methods: ['GET'])]
    public function privacy(): Response
    {
        return $this->render('web/privacy.html.twig');
    }

    #[Route('/terms', name: 'app_web_terms', methods: ['GET'])]
    public function terms(): Response
    {
        return $this->render('web/terms.html.twig');
    }

    #[Route('/copyright', name: 'app_web_copyright', methods: ['GET'])]
    public function copyright(): Response
    {
        return $this->render('web/copyright.html.twig', [
            'year' => (int) date('Y'),
        ]);
    }

    #[Route('/contact', name: 'app_web_contact', methods: ['GET'])]
    public function contact(): Response
    {
        return $this->render('web/contact.html.twig');
    }

    #[Route('/sitemap', name: 'app_web_sitemap', methods: ['GET'])]
    public function sitemap(): Response
    {
        return $this->render('web/sitemap.html.twig');
    }

    #[Route('/search', name: 'app_web_search', methods: ['GET'])]
    public function search(Request $request, GlossaryTermRepository $terms, ResourceRepository $resources, ProjectRepository $projects): Response
    {
        $q = trim((string) $request->query->get('q', ''));

        $results = [
            'terms'     => $q !== '' ? $terms->findBy(['term' => $q]) : [],
            'resources' => $q !== '' ? $resources->findBy(['title' => $q]) : [],
            'projects'  => $q !== '' ? $projects->findBy(['name' => $q]) : [],
        ];

        return $this->render('web/search.html.twig', [
            'q'       => $q,
            'results' => $results,
        ]);
    }

    #[Route('/axioms_guide', name: 'app_web_dw_axioms_guide', methods: ['GET'])]
    public function axiomsGuide(ProjectRepository $projects): Response
    {
        return $this->render('web/axioms_guide.html.twig', [
            'projects' => $projects->findBy([], ['name' => 'ASC']),
        ]);
    }

    #[Route('/axioms_spec', name: 'app_web_dw_axioms_spec', methods: ['GET'])]
    public function axiomsSpec(ProjectRepository $projects): Response
    {
        return $this->render('web/axioms_spec.html.twig', [
            'projects' => $projects->findBy([], ['name' => 'ASC']),
        ]);
    }

    #[Route('/gssato_spec', name: 'app_web_dw_gssato_spec', methods: ['GET'])]
    public function gssatoSpec(ProjectRepository $projects): Response
    {
        return $this->render('web/gssato_spec.html.twig', [
            'projects' => $projects->findBy([], ['name' => 'ASC']),
        ]);
    }

    #[Route('/axioms_ctk', name: 'app_web_dw_axioms_ctk', methods: ['GET'])]
    public function axiomsCtk(ProjectRepository $projects): Response
    {
        return $this->render('web/axioms_ctk.html.twig', [
            'projects' => $projects->findBy([], ['name' => 'ASC']),
        ]);
    }

    #[Route('/axioms_sdk', name: 'app_web_dw_axioms_sdk', methods: ['GET'])]
    public function axiomsSdk(ProjectRepository $projects): Response
    {
        return $this->render('web/axioms_sdk.html.twig', [
            'projects' => $projects->findBy([], ['name' => 'ASC']),
        ]);
    }

    #[Route('/cell_tpl', name: 'app_web_cell_tpl', methods: ['GET'])]
    public function cellTpl(ProjectRepository $projects): Response
    {
        return $this->render('web/cell_tpl.html.twig', [
            'projects' => $projects->findBy([], ['name' => 'ASC']),
        ]);
    }

    #[Route('/axioms_sample_projects', name: 'app_web_sample_projects', methods: ['GET'])]
    public function axiomsSampleProjects(ProjectRepository $projects): Response
    {
        return $this->render('web/axioms_sample_projects.html.twig', [
            'projects' => $projects->findBy([], ['name' => 'ASC']),
        ]);
    }

    #[Route('/free_courses', name: 'app_web_free_courses', methods: ['GET'])]
    public function freeCpurses(ProjectRepository $projects): Response
    {
        return $this->render('web/free_courses.html.twig', [
            'projects' => $projects->findBy([], ['name' => 'ASC']),
        ]);
    }

    #[Route('/training', name: 'app_web_training', methods: ['GET'])]
    public function training(ProjectRepository $projects): Response
    {
        return $this->render('web/training.html.twig', [
            'projects' => $projects->findBy([], ['name' => 'ASC']),
        ]);
    }

    #[Route('/certification', name: 'app_web_certification', methods: ['GET'])]
    public function certification(ProjectRepository $projects): Response
    {
        return $this->render('web/certification.html.twig', [
            'projects' => $projects->findBy([], ['name' => 'ASC']),
        ]);
    }

    #[Route('/podcast', name: 'app_web_podcast', methods: ['GET'])]
    public function podcast(ProjectRepository $projects): Response
    {
        return $this->render('web/podcast.html.twig', [
            'projects' => $projects->findBy([], ['name' => 'ASC']),
        ]);
    }

    #[Route('/newsletter/subscribe', name: 'app_newsletter_subscribe', methods: ['POST'])]
    public function newsletterSubscribe(Request $request): Response
    {
        // Handle newsletter subscription
        // This could store emails, send confirmation, etc.
        return $this->redirectToRoute('app_axioms_default');
    }

    #[Route('/roadmap', name: 'app_web_roadmap', methods: ['GET'])]
    public function roadmap(): Response
    {
        return $this->render('web/roadmap.html.twig');
    }
}
