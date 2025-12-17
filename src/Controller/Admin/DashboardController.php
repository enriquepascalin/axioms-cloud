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
namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Attribute\AdminDashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Axiom;
use App\Entity\AxiomEvidence;
use App\Entity\CofnormanceRun;
use App\Entity\ContractArtifact;
use App\Entity\Domain;
use App\Entity\Dowload;
use App\Entity\GlossaryTerm;
use App\Entity\Project;
use App\Entity\RegistryEntry;
use App\Entity\Resource;
use App\Entity\Specification;
use App\Entity\SpecVersion;
use App\Entity\User;

#[AdminDashboard(routePath: '/admin', routeName: 'admin')]
class DashboardController extends AbstractDashboardController
{
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('<img src="images/favicon-96x96.png"> AXIOMS Cloud Admin')
            ->setFaviconPath('images/favicon-96x96.png')
            ->renderContentMaximized()
            ->setDefaultColorScheme('dark')
            ->setLocales(['en', 'es'])

        ;
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Axiom', 'fas fa-list', Axiom::class);
        yield MenuItem::linkToCrud('Axiom Evidence', 'fas fa-user', AxiomEvidence::class);
        yield MenuItem::linkToCrud('Conformance Run', 'fas fa-id-badge', CofnormanceRun::class);
        yield MenuItem::linkToCrud('Conftract Artifact', 'fas fa-building', ContractArtifact::class);
        yield MenuItem::linkToCrud('Domain', 'fas fa-building', Domain::class);
        yield MenuItem::linkToCrud('Download', 'fas fa-building', Dowload::class);
        yield MenuItem::linkToCrud('Glossary Term', 'fas fa-building', GlossaryTerm::class);
        yield MenuItem::linkToCrud('Project', 'fas fa-building', Project::class);
        yield MenuItem::linkToCrud('Registry Entry', 'fas fa-building', RegistryEntry::class);
        yield MenuItem::linkToCrud('Resource', 'fas fa-building', Resource::class);
        yield MenuItem::linkToCrud('Specification', 'fas fa-building', Specification::class);
        yield MenuItem::linkToCrud('Spec Version', 'fas fa-building', SpecVersion::class);
        yield MenuItem::linkToCrud('User', 'fas fa-building', User::class);
    }
}
