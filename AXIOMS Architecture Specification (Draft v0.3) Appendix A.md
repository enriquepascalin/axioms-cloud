

[**1\. Cross-map knowledge/ to AXIOMS A1–A31	4**](#1.-cross-map-knowledge/-to-axioms-a1–a31)

[1.1 Top-level knowledge layout	4](#1.1-top-level-knowledge-layout)

[1.2 definitions/cell/\*	4](#1.2-definitions/cell/*)

[1.3 definitions/compliance/\*	4](#1.3-definitions/compliance/*)

[1.4 definitions/contracts/\*	5](#1.4-definitions/contracts/*)

[1.5 definitions/fitness/\*	6](#1.5-definitions/fitness/*)

[1.6 definitions/governance and definitions/telemetry	7](#1.6-definitions/governance-and-definitions/telemetry)

[1.7 docs/\*	7](#1.7-docs/*)

[1.8 evidence/\*	8](#1.8-evidence/*)

[**2\. How the CTK walks knowledge/ and enforces consistency	9**](#2.-how-the-ctk-walks-knowledge/-and-enforces-consistency)

[2.1 Phase 0 – Bootstrap from manifest.yaml	9](#2.1-phase-0-–-bootstrap-from-manifest.yaml)

[2.2 Phase 1 – Structural validation	9](#2.2-phase-1-–-structural-validation)

[2.3 Phase 2 – Definitions ↔ Docs coherence	9](#2.3-phase-2-–-definitions-↔-docs-coherence)

[2.4 Phase 3 – Definitions ↔ Evidence coherence	10](#2.4-phase-3-–-definitions-↔-evidence-coherence)

[2.5 Phase 4 – Per-axiom evaluation and bill of health	11](#2.5-phase-4-–-per-axiom-evaluation-and-bill-of-health)

[**3\. manifest.yaml – Technical Specification	12**](#3.-manifest.yaml-–-technical-specification)

[3.1 Top-level structure	12](#3.1-top-level-structure)

[3.2 metadata	12](#3.2-metadata)

[3.3 knowledge\_paths	13](#3.3-knowledge_paths)

[3.4 architectural\_profile	14](#3.4-architectural_profile)

[3.5 axioms	15](#3.5-axioms)

[3.6 tooling	16](#3.6-tooling)

[3.7 Full manifest.yaml Example (extended)	17](#3.7-full-manifest.yaml-example-\(extended\))

[1\. Division of responsibilities: manifest.yaml vs cell.yaml	39](#1.-division-of-responsibilities:-manifest.yaml-vs-cell.yaml)

[**4\. Technical specification for definitions/cell/cell.yaml	41**](#4.-technical-specification-for-definitions/cell/cell.yaml)

[4.1 Top-level structure (sorted keys)	41](#4.1-top-level-structure-\(sorted-keys\))

[3\. Full cell.yaml example that complements the manifest	44](#3.-full-cell.yaml-example-that-complements-the-manifest)

[**5\. knowledge/definitions/cell/versions.yaml	50**](#5.-knowledge/definitions/cell/versions.yaml)

[5.1 Purpose	50](#5.1-purpose)

[1.2 Schema / structure (conceptual)	50](#1.2-schema-/-structure-\(conceptual\))

[1.3 Full example: knowledge/definitions/cell/versions.yaml (Identity Cell)	54](#1.3-full-example:-knowledge/definitions/cell/versions.yaml-\(identity-cell\))

[**2\. knowledge/definitions/cell/dependencies.yaml	60**](#2.-knowledge/definitions/cell/dependencies.yaml)

[2.1 Purpose	60](#2.1-purpose)

[2.2 Schema / structure (conceptual)	61](#2.2-schema-/-structure-\(conceptual\))

[2.3 Full example: knowledge/definitions/cell/dependencies.yaml (Identity Cell)	63](#2.3-full-example:-knowledge/definitions/cell/dependencies.yaml-\(identity-cell\))

[1\. Why are we repeating so much from manifest.yaml in versions.yaml?	67](#1.-why-are-we-repeating-so-much-from-manifest.yaml-in-versions.yaml?)

[2\. What has axioms\_scope.enforced\_axioms to do with versioning?	68](#2.-what-has-axioms_scope.enforced_axioms-to-do-with-versioning?)

[3\. Corrected spec for versions.yaml (no duplication, no Axioms here)	69](#3.-corrected-spec-for-versions.yaml-\(no-duplication,-no-axioms-here\))

[4\. Corrected example: versions.yaml for the Identity Cell	71](#4.-corrected-example:-versions.yaml-for-the-identity-cell)

[1\. cells/cell\_tpl/knowledge/manifest.yaml	74](#1.-cells/cell_tpl/knowledge/manifest.yaml)

[2\. cells/cell\_tpl/knowledge/definitions/cell/cell.yaml	76](#2.-cells/cell_tpl/knowledge/definitions/cell/cell.yaml)

[3\. cells/cell\_tpl/knowledge/definitions/cell/dependencies.yaml	78](#3.-cells/cell_tpl/knowledge/definitions/cell/dependencies.yaml)

[4\. cells/cell\_tpl/knowledge/definitions/cell/versions.yaml	79](#4.-cells/cell_tpl/knowledge/definitions/cell/versions.yaml)

[5\. Overall verdict	80](#5.-overall-verdict)

[1\. cells/cell\_tpl/knowledge/manifest.yaml	81](#1.-cells/cell_tpl/knowledge/manifest.yaml-1)

[2\. cells/cell\_tpl/knowledge/definitions/cell/cell.yaml	82](#2.-cells/cell_tpl/knowledge/definitions/cell/cell.yaml-1)

[3\. cells/cell\_tpl/knowledge/definitions/cell/dependencies.yaml	84](#3.-cells/cell_tpl/knowledge/definitions/cell/dependencies.yaml-1)

[4\. cells/cell\_tpl/knowledge/definitions/cell/versions.yaml	84](#4.-cells/cell_tpl/knowledge/definitions/cell/versions.yaml-1)

[1\. policy\_manifest.yaml	85](#1.-policy_manifest.yaml)

[2\. regulatory\_map.yaml	90](#2.-regulatory_map.yaml)

[1\. File: definitions/contracts/events/event.example.asyncapi.yaml	96](#1.-file:-definitions/contracts/events/event.example.asyncapi.yaml)

[2\. Full example: event.example.asyncapi.yaml	97](#2.-full-example:-event.example.asyncapi.yaml)

[1\. cells/cell\_tpl/knowledge/definitions/contracts/observability/health\_endpoints.md	105](#1.-cells/cell_tpl/knowledge/definitions/contracts/observability/health_endpoints.md)

[2\. Endpoint summary	107](#2.-endpoint-summary)

[3\. /live – Liveness probe	107](#3.-/live-–-liveness-probe)

[4\. /ready – Readiness probe	109](#4.-/ready-–-readiness-probe)

[5\. /health – Aggregated health endpoint	111](#5.-/health-–-aggregated-health-endpoint)

[6\. Schema summary	113](#6.-schema-summary)

[3\. cells/cell\_tpl/knowledge/definitions/contracts/observability/metrics.schema.yaml	117](#3.-cells/cell_tpl/knowledge/definitions/contracts/observability/metrics.schema.yaml)

[4\. cells/cell\_tpl/knowledge/definitions/contracts/observability/traces.schema.yaml	121](#4.-cells/cell_tpl/knowledge/definitions/contracts/observability/traces.schema.yaml)

[1\) policy\_contract.yaml	126](#1\)-policy_contract.yaml)

[2\) authorization.rego	135](#2\)-authorization.rego)

[3\) rate\_limits.yaml	138](#3\)-rate_limits.yaml)

[rpc.example.openapi.yaml	142](#rpc.example.openapi.yaml)

[1\. sla-slo.yaml	160](#1.-sla-slo.yaml)

[2\. suites.yaml	165](#2.-suites.yaml)

[3\. thresholds.yaml	170](#3.-thresholds.yaml)

[1\. Canonical structure for fitness/axioms/Axx\_\*.yaml	175](#1.-canonical-structure-for-fitness/axioms/axx_*.yaml)

[**A01 – Cell Independence	178**](#a01-–-cell-independence)

[1\. Purpose of this file	178](#1.-purpose-of-this-file)

[2\. How A01’s fitness definition fits into the Knowledge Plane	178](#2.-how-a01’s-fitness-definition-fits-into-the-knowledge-plane)

[3\. Conceptual architecture of the file	179](#3.-conceptual-architecture-of-the-file)

[4\. A01 – What does “Cell independence” actually mean here?	180](#4.-a01-–-what-does-“cell-independence”-actually-mean-here?)

[5\. How CTK / tooling uses this file	181](#5.-how-ctk-/-tooling-uses-this-file)

[6\. Full example: A01\_cell\_independence.yaml	182](#6.-full-example:-a01_cell_independence.yaml)

[**A02 – Internal Encapsulation	191**](#a02-–-internal-encapsulation)

[1\. Purpose of this file	191](#1.-purpose-of-this-file-1)

[2\. How A02’s fitness definition fits the Knowledge Plane	192](#2.-how-a02’s-fitness-definition-fits-the-knowledge-plane)

[3\. What “Internal Encapsulation” actually means in AXIOMS	193](#3.-what-“internal-encapsulation”-actually-means-in-axioms)

[4\. Structure and semantics of A02\_internal\_encapsulation.yaml	194](#4.-structure-and-semantics-of-a02_internal_encapsulation.yaml)

[5\. Full example: A02\_internal\_encapsulation.yaml	195](#5.-full-example:-a02_internal_encapsulation.yaml)

[**A03 – Contract Definition	205**](#a03-–-contract-definition)

[1\. Purpose of this file	205](#1.-purpose-of-this-file-2)

[2\. How A03 fits into the Knowledge Plane	205](#2.-how-a03-fits-into-the-knowledge-plane)

[3\. What “Contract Definition” means in AXIOMS	206](#3.-what-“contract-definition”-means-in-axioms)

[4\. Structure and semantics of A03\_contract\_definition.yaml	207](#4.-structure-and-semantics-of-a03_contract_definition.yaml)

[5\. Full example: A03\_contract\_definition.yaml	208](#5.-full-example:-a03_contract_definition.yaml)

# **1\. Cross-map knowledge/ to AXIOMS A1–A31** {#1.-cross-map-knowledge/-to-axioms-a1–a31}

| /cell-root/ └── knowledge/     ├── definitions/     ├── docs/     ├── evidence/     ├── manifest.yaml     └── README.md |
| :---- |

## **1.1 Top-level knowledge layout** {#1.1-top-level-knowledge-layout}

| Path | Purpose | Primary axioms | Related axioms |
| ----- | ----- | ----- | ----- |
| knowledge/ | Root of the Knowledge Plane for the Cell. | A7, A31 | A1, A2, A29, A30 |
| knowledge/manifest.yaml | Machine-readable entrypoint (identity, pointers). | A7, A30, A31 | A1, A2, A29 |
| knowledge/README.md | Human orientation to the knowledge layout. | A31 | A7, A29 |

## **1.2 definitions/cell/\*** {#1.2-definitions/cell/*}

| Path | Purpose | Primary axioms | Related axioms |
| ----- | ----- | ----- | ----- |
| definitions/cell/cell.yaml | Canonical Cell identity: domain, capabilities, planes, owner. | A1, A2, A7, A31 | A5, A6, A27, A29, A30 |
| definitions/cell/versions.yaml | Version history of the Cell, with dates and summaries. | A12, A14, A30 | A1, A15, A27, A31 |
| definitions/cell/dependencies.yaml | Logical dependencies (other Cells, external systems, infra). | A5, A6, A22, A23 | A1, A2, A9, A27, A30 |

## **1.3 definitions/compliance/\*** {#1.3-definitions/compliance/*}

| Path | Purpose | Primary axioms | Related axioms |
| ----- | ----- | ----- | ----- |
| definitions/compliance/policy\_manifest.yaml | List of policies in force (IDs, versions, paths). | A16, A17, A18, A20, A21 | A19, A30, A31 |
| definitions/compliance/regulatory\_map.yaml | Mapping Cell behavior to external regulations. | A21, A30 | A16–A20, A31 |

## **1.4 definitions/contracts/\*** {#1.4-definitions/contracts/*}

### **Contracts root and index**

| Path | Purpose | Primary axioms | Related axioms |
| ----- | ----- | ----- | ----- |
| definitions/contracts/contract-index.yaml | Machine-readable index of all contracts the Cell exposes/uses. | A3, A30, A31 | A1, A2, A7, A29 |

### **Events**

| Path | Purpose | Primary axioms | Related axioms |
| ----- | ----- | ----- | ----- |
| definitions/contracts/events/ | Async/event contracts (AsyncAPI, schemas, etc). | A3, A4, A6, A8, A12, A13 | A14, A15, A22, A25, A29 |

### **Observability contracts**

| Path | Purpose | Primary axioms | Related axioms |
| ----- | ----- | ----- | ----- |
| definitions/contracts/observability/metrics.schema.yaml | Metric schema: names, units, labels, types. | A25, A26 | A10, A28, A30 |
| definitions/contracts/observability/logs.schema.yaml | Log schema: structure, required fields (trace\_id, etc.). | A21, A25, A26 | A11, A7, A30 |
| definitions/contracts/observability/traces.schema.yaml | Trace span schema: naming and attributes. | A11, A25 | A26, A22, A23 |
| definitions/contracts/observability/health\_endpoints.md | Contract for health/readiness/liveness endpoints. | A25, A10 | A22, A24, A28 |

### **Policy contracts**

| Path | Purpose | Primary axioms | Related axioms |
| ----- | ----- | ----- | ----- |
| definitions/contracts/policy/authorization.rego | Authorization policy as code (PDP rules). | A16, A17, A20, A21 | A18, A19, A22 |
| definitions/contracts/policy/rate\_limits.yaml | Rate limit / quota policy declarations. | A16, A22, A23 | A9, A20, A28 |
| definitions/contracts/policy/POLICY\_CONTRACT.md | Human contract: PDP inputs/outputs, semantics. | A16, A20, A21 | A19, A30, A31 |

### **RPC contracts**

| Path | Purpose | Primary axioms | Related axioms |
| ----- | ----- | ----- | ----- |
| definitions/contracts/rpc/openapi.yaml | Formal synchronous interface contract (RPC). | A3, A4, A6, A8, A10 | A12–A15, A29 |
| definitions/contracts/rpc/identity.rpc.versioning.md | RPC versioning/compatibility notes and policies. | A12, A13, A14, A15 | A1, A6, A29, A30 |

## **1.5 definitions/fitness/\*** {#1.5-definitions/fitness/*}

At this level, there are two types:

* **Framework files**: suites, thresholds, SLOs.  
* **Per-axiom definitions**: exactly one-to-one with A1–A31.

### **Framework files**

| Path | Purpose | Primary axioms | Related axioms |
| ----- | ----- | ----- | ----- |
| definitions/fitness/suites.yaml | Groups checks into logical suites (ci\_minimal, ci\_full, etc.). | A29, A30 | A25, A27 |
| definitions/fitness/thresholds.yaml | Defines numeric thresholds for suites (latency, error rate, coverage). | A25, A28, A30 | A9, A10, A22, A23 |
| definitions/fitness/sla-slo.yaml | Declares SLOs/SLAs for availability, latency, etc. | A25, A28, A30 | A22, A23, A24 |

### **Per-axiom files**

Each file under definitions/fitness/axioms/ is **the fitness definition** for that specific axiom. So the mapping is:

* A01\_cell\_independence.yaml → A1

* A02\_internal\_encapsulation.yaml → A2

* …

* A31\_knowledge\_plane.yaml → A31

Each of them encodes, for this Cell:

* Which checks implement that axiom.

* Which suites run those checks.

* Which evidence files are expected (e.g. coverage, conformance reports, telemetry).

All of them also support A29 (testability) and A30 (governance via CTK), because they exist to make the axioms testable and governable.

## 

## **1.6 definitions/governance and definitions/telemetry** {#1.6-definitions/governance-and-definitions/telemetry}

| Path | Purpose | Primary axioms | Related axioms |
| ----- | ----- | ----- | ----- |
| definitions/governance/risk\_register.yaml | Formal risk register for the Cell. | A22, A23, A24, A30 | A1, A9, A10, A27 |
| definitions/telemetry/log\_events.yaml | Log event taxonomy and codes. | A21, A25, A26 | A11, A7 |
| definitions/telemetry/metrics\_catalog.yaml | Concrete metric catalog with semantics. | A25, A26 | A10, A28 |
| definitions/telemetry/trace\_spans.yaml | Canonical span list / attributes / relations. | A11, A25, A26 | A22, A23 |

## **1.7 docs/\*** {#1.7-docs/*}

| Path | Purpose | Primary axioms | Related axioms |
| ----- | ----- | ----- | ----- |
| docs/adr/ADR-0001\_initial\_cell\_design.md | Architecture decision record for the initial design. | A1, A2, A27, A30 | A5, A7, A31 |
| docs/diagrams/architecture.md | Architecture diagrams and visual narratives. | A1, A2, A5, A27 | A7, A22 |
| docs/operations/MANUAL.md | Operational manual (how to operate and integrate). | A6, A8, A10, A22, A24, A28 | A7, A25, A29 |
| docs/operations/DEPLOYMENT\_GUIDE.md | Deployment and rollout guide. | A1, A15, A24, A27 | A10, A22, A30 |
| docs/operations/CONFIGURATION\_GUIDE.md | Configuration reference. | A7, A10, A22 | A6, A25 |
| docs/operations/RUNBOOKS.md | Incident and routine operation runbooks. | A22, A24, A28 | A9, A10, A25 |
| docs/COMPLIANCE\_OVERVIEW.md | Human overview of regulatory/policy compliance. | A16–A21, A30 | A31 |
| docs/CONFORMANCE\_REPORT.md | Human-readable CTK “bill of health” summary. | A30, A31 | A1–A29 |
| docs/CONTRACT\_INDEX.md | Human-readable contract index. | A3, A31 | A12–A15, A29 |
| docs/FITNESS\_OVERVIEW.md | Explains fitness functions and suites. | A29, A30 | A25, A27 |
| docs/OBSERVABILITY\_GUIDE.md | Observability guide (metrics, logs, traces in practice). | A11, A21, A25, A26 | A22, A28 |
| docs/SPECIFICATION.md | Narrative Cell specification and invariants. | A1, A2, A6, A7, A27, A31 | A3, A8, A25, A29 |

## **1.8 evidence/\*** {#1.8-evidence/*}

| Path | Purpose | Primary axioms | Related axioms |
| ----- | ----- | ----- | ----- |
| evidence/conformance/latest\_report.json | Latest CTK conformance report (“bill of health”). | A30, A31 | A1–A29 |
| evidence/conformance/history/ | Historical conformance reports. | A30 | A27, A31 |
| evidence/coverage/unit\_coverage.json | Unit test coverage. | A29 | A1–A28 |
| evidence/coverage/integration\_coverage.json | Integration test coverage. | A29 | A1–A28 |
| evidence/coverage/fitness\_coverage.json | Coverage of declared fitness functions vs executed tests. | A29, A30 | A1–A31 |
| evidence/observability/logs\_sample.json | Real log samples proving schema adherence. | A21, A25, A26 | A11, A28 |
| evidence/observability/metrics\_snapshot.json | Real metric snapshots proving metric schema and SLO tracking. | A25, A26 | A9, A10, A28 |
| evidence/observability/traces\_sample.json | Real trace samples proving trace schema and propagation. | A11, A25, A26 | A22, A23 |
| evidence/security/sbom.spdx.json | SBOM; authoritative list of components for security. | A9, A17, A18, A20, A21 | A30 |
| evidence/security/dependency\_scan\_report.json | Dependency scan report. | A9, A17, A18, A20, A21 | A30 |
| evidence/security/vulnerability\_report.json | Aggregated view of vulnerabilities and status. | A9, A17, A18, A20, A21 | A30 |

# 

# **2\. How the CTK walks knowledge/ and enforces consistency** {#2.-how-the-ctk-walks-knowledge/-and-enforces-consistency}

Think of the **Conformance Test Kit (CTK)** as a pipeline that starts at manifest.yaml and moves in four main phases:

1. **Bootstrap and structure checks.**  
2. **Definitions ↔ Docs coherence (what you say vs. what you describe).**  
3. **Definitions ↔ Evidence coherence (what you say vs. what actually happens).**  
4. **Per-axiom evaluation and final “bill of health”.**

## **2.1 Phase 0 – Bootstrap from manifest.yaml** {#2.1-phase-0-–-bootstrap-from-manifest.yaml}

1. Read knowledge/manifest.yaml.  
2. Validate presence of minimal fields:  
   * cell\_id, version, owner.  
   * Pointers to: docs/SPECIFICATION.md, definitions/contracts/contract-index.yaml, evidence/conformance/latest\_report.json (or expected location).  
3. Check that all referenced files exist and are readable.  
4. Cross-check:  
   * manifest.version is the latest entry in definitions/cell/versions.yaml.  
   * Version tags match entries in evidence/conformance/history/ (if any).

**If this fails → A7/A30/A31 issues.**

## **2.2 Phase 1 – Structural validation** {#2.2-phase-1-–-structural-validation}

CTK validates that **the knowledge layout itself** conforms to AXIOMS expectations:

* Mandatory directories exist:  
  * definitions/, docs/, evidence/.  
* Mandatory subdirectories and key files exist:  
  * definitions/cell/cell.yaml  
  * definitions/contracts/contract-index.yaml  
  * definitions/fitness/axioms/A01\_\*.yaml … A31\_\*.yaml  
  * docs/SPECIFICATION.md, docs/CONTRACT\_INDEX.md, docs/operations/MANUAL.md  
  * evidence/conformance/latest\_report.json, etc.

If anything mandatory is missing, CTK records violations, especially against **A31 (Knowledge Plane)** and the relevant axioms (e.g. A3 for missing contracts).

## **2.3 Phase 2 – Definitions ↔ Docs coherence** {#2.3-phase-2-–-definitions-↔-docs-coherence}

Goal: **Humans are not being lied to**. The narrative (docs/) must match the normative definitions (definitions/).

Examples of checks:

* definitions/contracts/contract-index.yaml vs docs/CONTRACT\_INDEX.md  
  * Every contract listed in the YAML must be mentioned in the MD.  
  * Names and types must match (e.g. RPC, EVENT, POLICY, OBSERVABILITY).  
* definitions/cell/cell.yaml vs docs/SPECIFICATION.md  
  * Cell name, domain, owner, and high-level capabilities must align.  
  * CTK can fail if owner/team or criticality differs.  
* definitions/compliance/\* vs docs/COMPLIANCE\_OVERVIEW.md  
  * All regulations in regulatory\_map.yaml appear in the overview.  
  * All policies listed in policy\_manifest.yaml are described (at least at a high level).  
* definitions/fitness/axioms/\*.yaml vs docs/FITNESS\_OVERVIEW.md  
  * Each Axiom this Cell implements with fitness checks must be mentioned.  
  * CTK can enforce at minimum that the overview references all Axioms with active checks.  
* definitions/telemetry/\* \+ definitions/contracts/observability/\* vs docs/OBSERVABILITY\_GUIDE.md  
  * Key metrics, logs, and traces defined in YAML must have narrative coverage: how to use them, what they mean.

This ensures **human-facing documentation doesn’t drift** from the machine-readable source of truth.

## **2.4 Phase 3 – Definitions ↔ Evidence coherence** {#2.4-phase-3-–-definitions-↔-evidence-coherence}

Goal: **The system actually behaves according to its declared contracts and fitness expectations.**

### **2.4.1 Contracts vs conformance**

* CTK reads:  
  * definitions/contracts/contract-index.yaml  
  * Relevant fitness definitions (e.g. A03\_contract\_definition.yaml, A31\_knowledge\_plane.yaml).  
* CTK parses evidence/conformance/latest\_report.json:  
  * Ensures that each contract from the index has associated checks in the report.  
  * Ensures that mandatory contract validations passed (or are at least reported explicitly as failures/warnings).

If contracts are defined but never tested → A3/A29/A30 issues.

### **2.4.2 Observability declarations vs observability evidence**

* Metrics:  
  * Compare definitions/telemetry/metrics\_catalog.yaml & definitions/contracts/observability/metrics.schema.yaml with evidence/observability/metrics\_snapshot.json.  
  * Ensure required metrics exist, have the expected types/units, and are populated.  
* Logs:  
  * Compare definitions/telemetry/log\_events.yaml & logs.schema.yaml with evidence/observability/logs\_sample.json.  
  * Validate structure, mandatory fields, and use of defined event codes.  
* Traces:  
  * Compare definitions/telemetry/trace\_spans.yaml & traces.schema.yaml with evidence/observability/traces\_sample.json.  
  * Ensure canonical spans and attributes appear in real traces, and their relationships are sane.

If schemas and catalogs say one thing, but reality shows something else → A11, A21, A25, A26 are flagged.

### **2.4.3 Fitness definitions vs executed tests**

* CTK loads:  
  * definitions/fitness/axioms/\*.yaml  
  * definitions/fitness/suites.yaml  
  * definitions/fitness/thresholds.yaml  
* CTK then correlates:  
  * evidence/coverage/fitness\_coverage.json  
  * evidence/conformance/latest\_report.json  
* For each Axiom:  
  * Are there checks defined?  
  * Are those checks part of at least one suite?  
  * Have those suites been executed (per coverage and report)?  
  * Did results respect thresholds (latency, error rates, coverage levels, etc.)?

This enforces **A29 (testability)** and **A30 (governance)**: if you claim a fitness function exists, CTK ensures it is actually run and produces evidence.

### **2.4.4 Compliance & security vs security evidence**

* CTK cross-checks:  
  * definitions/compliance/policy\_manifest.yaml  
  * definitions/compliance/regulatory\_map.yaml  
  * definitions/contracts/policy/\*  
* With:  
  * evidence/security/sbom.spdx.json  
  * evidence/security/dependency\_scan\_report.json  
  * evidence/security/vulnerability\_report.json  
* Examples:  
  * Every critical dependency in the regulatory map should appear in the SBOM.  
  * Vulnerabilities relevant to regulated data paths must be visible in the vulnerability report and tied to risks/mitigations in governance.

### **2.4.5 Versions & history**

* CTK ensures:  
  * manifest.version \= latest in definitions/cell/versions.yaml.  
  * evidence/conformance/history/ contains a report per important version (release/snapshot).  
  * docs/CONFORMANCE\_REPORT.md references evidence/conformance/latest\_report.json.

If versions drift, CTK flags A27/A30/A31 issues.

## **2.5 Phase 4 – Per-axiom evaluation and bill of health** {#2.5-phase-4-–-per-axiom-evaluation-and-bill-of-health}

Finally, CTK synthesizes everything into a **per-axiom status**:

* For each A1–A31:  
  * Read its fitness file definitions/fitness/axioms/Axx\_\*.yaml.  
  * Evaluate the referenced checks and evidence.  
  * Produce a status: PASS, WARN, FAIL, or NOT\_APPLICABLE.  
* Write the result to:  
  * evidence/conformance/latest\_report.json (machine-readable).  
  * Optionally generate/update docs/CONFORMANCE\_REPORT.md (human-readable summary).

This is the “bill of health” that CI/CD and governance use to decide whether the Cell is conformant enough to deploy/promote.\\nHere’s what I’ll give you now:

1. A **technical specification** for manifest.yaml (what sections it has, what each field means, and how CTK uses it).  
2. A **full, extended manifest.yaml example** for an identity Cell, with all 31 axioms explicitly represented and no placeholders.

# **3\. manifest.yaml – Technical Specification** {#3.-manifest.yaml-–-technical-specification}

### **Location**

**/cell-root/knowledge/manifest.yaml**

### **Purpose**

* Single **entrypoint** for the Knowledge Plane of a Cell.  
* Describes the Cell in **technical terms**:  
  * Identity, domain, criticality.  
  * Boundaries and communication with the external world.  
  * Where all the other knowledge artifacts live in the tree.  
  * How each **Axiom A1–A31** is implemented, enforced, and evaluated.  
* The **CTK** and other tools read this file first to:  
  * Discover all relevant paths under knowledge/.  
  * Understand which fitness suites to run and how to gate pipelines.  
  * Map each Axiom to its fitness definition and expected evidence.

## **3.1 Top-level structure** {#3.1-top-level-structure}

Top-level keys (kept in alphabetical order):

* **api\_version**: string  
* **architectural\_profile**: object  
* **axioms**: object  
* **knowledge\_paths**: object  
* **metadata**: object  
* **tooling**: object  
* **api\_version**  
  * String identifier for the manifest schema version.  
  * Used by CTK to know how to parse and validate this manifest.

Example:

api\_version: "axioms.erparom.dev/v1alpha1"

## **3.2 metadata** {#3.2-metadata}

Describes the Cell itself.

metadata:

* **cell\_id**: string  
* **cell\_name**: string  
* **description**: string  
* **version**: string  
* **domain**: string  
* **bounded\_context**: string  
* **owner\_team**: string  
* **owner\_contacts**:  
  * **email**: string  
  * **slack**: string  
*   **criticality\_tier**: string  
*   **lifecycle\_stage**: string  
*   **supported\_environments**: string  
*   **tags**: string

CTK uses metadata to:

* Tag reports.  
* Validate that version matches evidence and definitions/cell/versions.yaml.  
* Apply environment-specific policies (e.g. stricter rules for production).

## **3.3 knowledge\_paths** {#3.3-knowledge_paths}

This section tells CTK **where** everything is inside /knowledge/. All paths are relative to the knowledge/ directory.

knowledge\_paths:

* **root**: string  
* **definitions\_dir**: string  
* **docs\_dir**: string  
* **evidence\_dir**: string  
* **cell\_definition\_file**: string  
* **versions\_file**: string  
* **dependencies\_file**: string  
* **contract\_index\_file**: string  
* **rpc\_contract\_file**: string  
* **events\_dir**: string  
* **policy\_dir**: string  
* **observability\_contract\_dir**: string  
* **telemetry\_dir**: string  
* **fitness\_axioms\_dir**: string  
* **fitness\_suites\_file**: string  
* **fitness\_thresholds\_file**: string  
* **fitness\_sla\_slo\_file**: string  
* **compliance\_policy\_manifest\_file**: string  
* **compliance\_regulatory\_map\_file**: string  
* **governance\_risk\_register\_file**: string  
* **docs\_spec\_file**: string  
* **docs\_contract\_index\_file**: string  
* **docs\_fitness\_overview\_file**: string  
* **docs\_observability\_guide\_file**: string  
* **docs\_compliance\_overview\_file**: string  
* **docs\_conformance\_report\_file**: string  
* **operations\_manual\_file**: string  
* **operations\_deployment\_guide\_file**: string  
* **operations\_configuration\_guide\_file**: string  
* **operations\_runbooks\_file**: string  
* **conformance\_latest\_report\_file**: string  
* **conformance\_history\_dir**: string  
* **coverage\_unit\_file**: string  
* **coverage\_integration\_file**: string  
* **coverage\_fitness\_file**: string  
* **observability\_logs\_sample\_file**: string  
* **observability\_metrics\_snapshot\_file**: string  
* **observability\_traces\_sample\_file**: string  
* **security\_sbom\_file**: string  
* **security\_dependency\_scan\_file**: string  
* **security\_vulnerability\_report\_file**: string

CTK uses knowledge\_paths to locate:

* The **normative sources** (definitions/, docs/).  
* The **evidence** (evidence/).  
* Key files such as spec, contract index, CTK reports, coverage, and security metadata.

## **3.4 architectural\_profile** {#3.4-architectural_profile}

Describes how the Cell is wired into the wider system in terms of planes, boundaries, and communication.

architectural\_profile:

*   planes:  
  * data:  
    * description: string  
    * responsibilities: \[string\]  
  * control:  
    * description: string  
    * responsibilities: \[string\]  
  * knowledge:  
    * description: string  
    * responsibilities: \[string\]  
*  boundaries:  
*     upstream\_cells:  
*       \- id: string  
*         relation: string  
*     downstream\_cells:  
*       \- id: string  
*         relation: string  
*     external\_systems:  
*       \- name: string  
*         type: string  
*         interaction: string  
*         contract\_reference: string\\n  communication:  
*     rpc:  
*       provides:  
*         \- name: string  
*           contract: string  
*           surface: string  
*           auth\_required: boolean  
*           protocols: \[string\]  
*       consumes:  
*         \- name: string  
*           cell\_id: string  
*           contract: string  
*           surface: string  
*           protocols: \[string\]  
*     events:  
*       publishes:  
*         \- name: string  
*           contract: string  
*           topic: string  
*           delivery\_semantics: string  
*       subscribes:  
*         \- name: string  
*           cell\_id: string  
*           contract: string  
*           topic: string  
*     policy:  
*       pdp:  
*         implementation: string  
*         contract: string  
*       rate\_limits:  
*         implementation: string  
*         contract: string  
*     observability:  
*       metrics\_schema: string  
*       logs\_schema: string  
*       traces\_schema: string  
*       health\_endpoints: string  
* 

CTK uses architectural\_profile to:

* Cross-check against definitions/contracts/contract-index.yaml.  
* Verify that declared RPC and event surfaces exist as contracts and have tests.  
* Validate consistency of contract references.  
* Support checks for A1, A2, A3, A4, A5, A6, A7, A8, A10, A22.

## **3.5 axioms** {#3.5-axioms}

Defines how **every Axiom A1–A31** is implemented, enforced, and evaluated for this Cell.

axioms:

  enforcement\_profile:

    mode: string                  \# "strict" or "best-effort"

    gating:

      ci\_minimal:

        must\_pass: \[string\]       \# list of Axx ids

      ci\_full:

        must\_pass: \[string\]

      pre\_release:

        must\_pass: \[string\]

    default\_suites:

      on\_push: string             \# suite name

      nightly: string

      pre\_release: string\\n  implementations:

    \- id: string                  \# "A01"..."A31"

      name: string                \# short machine-friendly name

      title: string               \# human-friendly title

      description: string         \# concise but clear description

      fitness\_definition: string  \# path to definitions/fitness/axioms/Axx\_\*.yaml

      expected\_evidence: \[string\] \# paths to evidence used for evaluation

      suites: \[string\]            \# fitness suites that must exercise this axiom

      severity: string            \# "blocker", "critical", "warning", "info"

      owner\_team: string          \# team primarily responsible for this axiom\\nCTK uses axioms to:

* Decide which suites to run in which pipeline.

* Treat some axioms as **hard gates** (e.g. must pass to promote to staging/production).

* Map each axiom id to its corresponding fitness definition and evidence files.

* Classify failures by severity.

## **3.6 tooling** {#3.6-tooling}

Describes the tools expected to interact with the Knowledge Plane.

tooling:

  ctk:

    profile: string

    report\_format\_version: string

    minimum\_supported\_version: string

  generators:

    contract\_index:

      tool: string

      version: string

    sbom:

      tool: string

      version: string

This is primarily informational but allows CTK and other tools to check consistency of their own versions against expected ones.

## **3.7 Full manifest.yaml Example (extended)** {#3.7-full-manifest.yaml-example-(extended)}

Below is a **fully populated example** for an identity Cell. All 31 axioms are explicitly described and wired to the canonical knowledge tree.

api\_version: "axioms.erparom.dev/v1alpha1"\\narchitectural\_profile:

  planes:

    control:

      description: "Control plane responsibilities for this Cell include configuration management, rollout orchestration and coordination with the global control layer for feature flags and contract version negotiation."

      responsibilities:

        \- "Apply configuration changes received from the global control plane to the Identity Cell."

        \- "Coordinate rollout strategies (blue/green, canary) for the Identity Cell."

        \- "Expose health, readiness and liveness endpoints consumable by the control plane."

        \- "Advertise contract versions supported by this Cell for RPC and event interfaces."

    data:

      description: "The Identity Cell data plane implements authentication, authorization and user identity lifecycle operations with strict multi-tenant isolation."

      responsibilities:

        \- "Authenticate end users and workloads using passwords, tokens and federated IdPs."

        \- "Issue, validate and revoke capability tokens and access tokens."

        \- "Manage user identities, credentials and profile attributes per tenant."

        \- "Emit domain events related to identity changes (registration, password reset, role changes)."

    knowledge:

      description: "The Knowledge Plane for the Identity Cell captures the Cell’s contracts, fitness definitions, telemetry schemas, conformance evidence and operational documentation, enabling evidence-driven governance against A1–A31."

      responsibilities:

        \- "Provide a canonical description of the Cell (identity, domain, boundaries, contracts)."

        \- "Define fitness functions and suites that encode the implementation of every AXIOM."

        \- "Store conformance reports, coverage metrics, telemetry samples and security posture evidence."

        \- "Serve as the main entrypoint for CTK and other governance tools to evaluate the Cell."\\n  boundaries:

    downstream\_cells:

      \- id: "notifications"

        relation: "Publishes identity-related events consumed by the Notifications Cell."

      \- id: "billing"

        relation: "Consumes billing status for identity-linked entitlements."

    external\_systems:

      \- name: "ExternalIdP\_AzureAD"

        type: "idp"

        interaction: "Federated login and SSO using OpenID Connect."

        contract\_reference: "definitions/contracts/rpc/openapi.yaml\#external-idp-azuread"

      \- name: "ExternalIdP\_Google"

        type: "idp"

        interaction: "Federated login and SSO using OpenID Connect."

        contract\_reference: "definitions/contracts/rpc/openapi.yaml\#external-idp-google"

    upstream\_cells:

      \- id: "api-gateway"

        relation: "Receives authenticated traffic via an API gateway that forwards identity calls to this Cell."

      \- id: "frontend"

        relation: "Receives RPC calls on behalf of browser or mobile frontends for login, logout and profile operations."\\n  communication:

    events:

      publishes:

        \- name: "UserRegistered"

          contract: "definitions/contracts/events/user\_registered.asyncapi.yaml"

          topic: "identity.user.registered"

          delivery\_semantics: "at-least-once"

        \- name: "UserPasswordChanged"

          contract: "definitions/contracts/events/user\_password\_changed.asyncapi.yaml"

          topic: "identity.user.password.changed"

          delivery\_semantics: "at-least-once"

      subscribes:

        \- name: "PaymentCompleted"

          cell\_id: "billing"

          contract: "../billing/knowledge/definitions/contracts/events/payment\_completed.asyncapi.yaml"

          topic: "billing.payment.completed"

    observability:

      health\_endpoints: "definitions/contracts/observability/health\_endpoints.md"

      logs\_schema: "definitions/contracts/observability/logs.schema.yaml"

      metrics\_schema: "definitions/contracts/observability/metrics.schema.yaml"

      traces\_schema: "definitions/contracts/observability/traces.schema.yaml"

    policy:

      pdp:

        contract: "definitions/contracts/policy/POLICY\_CONTRACT.md"

        implementation: "definitions/contracts/policy/authorization.rego"

      rate\_limits:

        contract: "definitions/contracts/policy/POLICY\_CONTRACT.md"

        implementation: "definitions/contracts/policy/rate\_limits.yaml"

    rpc:

      provides:

        \- name: "IdentityPublicAPI"

          contract: "definitions/contracts/rpc/openapi.yaml"

          surface: "public"

          auth\_required: true

          protocols:

            \- "https+json"

        \- name: "IdentityAdminAPI"

          contract: "definitions/contracts/rpc/openapi.yaml\#admin"

          surface: "internal"

          auth\_required: true

          protocols:

            \- "https+json"

      consumes:

        \- name: "BillingAPI"

          cell\_id: "billing"

          contract: "../billing/knowledge/definitions/contracts/rpc/openapi.yaml"

          surface: "internal"

          auth\_required: true

          protocols:

            \- "https+json"\\naxioms:

  enforcement\_profile:

    mode: "strict"

    gating:

      ci\_full:

        must\_pass:

          \- "A01"

          \- "A02"

          \- "A03"

          \- "A04"

          \- "A05"

          \- "A06"

          \- "A07"

          \- "A08"

          \- "A09"

          \- "A10"

          \- "A11"

          \- "A12"

          \- "A13"

          \- "A14"

          \- "A15"

          \- "A16"

          \- "A17"

          \- "A18"

          \- "A19"

          \- "A20"

          \- "A21"

          \- "A22"

          \- "A23"

          \- "A24"

          \- "A25"

          \- "A26"

          \- "A27"

          \- "A28"

          \- "A29"

          \- "A30"

          \- "A31"

      ci\_minimal:

        must\_pass:

          \- "A01"

          \- "A03"

          \- "A05"

          \- "A07"

          \- "A08"

          \- "A09"

          \- "A10"

          \- "A11"

          \- "A16"

          \- "A17"

          \- "A21"

          \- "A25"

          \- "A26"

          \- "A29"

      pre\_release:

        must\_pass:

          \- "A01"

          \- "A02"

          \- "A03"

          \- "A05"

          \- "A06"

          \- "A08"

          \- "A09"

          \- "A10"

          \- "A11"

          \- "A16"

          \- "A17"

          \- "A18"

          \- "A19"

          \- "A20"

          \- "A21"

          \- "A22"

          \- "A23"

          \- "A24"

          \- "A25"

          \- "A26"

          \- "A28"

          \- "A29"

          \- "A30"

    default\_suites:

      nightly: "ci\_full"

      on\_push: "ci\_minimal"

      pre\_release: "pre\_release"\\n  implementations:

    \- id: "A01"

      name: "cell\_independence"

      title: "Cell independence"

      description: "The Identity Cell can be built, deployed and rolled back independently from other Cells. Dependencies are accessed only via declared contracts and the control plane orchestrates rollouts using canary strategies."

      fitness\_definition: "definitions/fitness/axioms/A01\_cell\_independence.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

        \- "evidence/coverage/fitness\_coverage.json"

        \- "evidence/coverage/integration\_coverage.json"

      suites:

        \- "ci\_full"

        \- "pre\_release"

      severity: "blocker"

      owner\_team: "platform-identity"\\n    \- id: "A02"

      name: "internal\_encapsulation"

      title: "Internal encapsulation"

      description: "Internal domain and persistence models are not exposed over contracts. Only public DTOs and schemas defined in RPC and event contracts cross Cell boundaries."

      fitness\_definition: "definitions/fitness/axioms/A02\_internal\_encapsulation.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

      suites:

        \- "ci\_full"

      severity: "critical"

      owner\_team: "platform-identity"\\n    \- id: "A03"

      name: "contract\_definition"

      title: "Formal contract definition"

      description: "All RPC, event, policy and observability surfaces have formal, versioned contracts declared under definitions/contracts and indexed by contract-index.yaml."

      fitness\_definition: "definitions/fitness/axioms/A03\_contract\_definition.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

        \- "evidence/coverage/fitness\_coverage.json"

      suites:

        \- "ci\_minimal"

        \- "ci\_full"

        \- "pre\_release"

      severity: "blocker"

      owner\_team: "platform-identity"\\n    \- id: "A04"

      name: "standard\_protocols"

      title: "Standard protocols and formats"

      description: "The Identity Cell uses HTTPS with JSON for RPC and AsyncAPI-described message formats for events, avoiding proprietary protocols."

      fitness\_definition: "definitions/fitness/axioms/A04\_standard\_protocols.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

      suites:

        \- "ci\_full"

      severity: "warning"

      owner\_team: "platform-identity"\\n    \- id: "A05"

      name: "acyclic\_dependencies"

      title: "Acyclic dependency graph"

      description: "The Identity Cell participates in an acyclic dependency graph. dependencies.yaml explicitly lists its logical dependencies and static analysis verifies the absence of dependency cycles."

      fitness\_definition: "definitions/fitness/axioms/A05\_acyclic\_dependencies.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

      suites:

        \- "ci\_minimal"

        \- "ci\_full"

      severity: "blocker"

      owner\_team: "platform-identity"\\n    \- id: "A06"

      name: "consistency\_contracts"

      title: "Consistency contracts"

      description: "Consistency expectations between Identity operations and downstream Cells are documented and verified as part of integration and contract tests."

      fitness\_definition: "definitions/fitness/axioms/A06\_consistency\_contracts.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

        \- "evidence/coverage/integration\_coverage.json"

      suites:

        \- "ci\_full"

        \- "pre\_release"

      severity: "critical"

      owner\_team: "platform-identity"\\n    \- id: "A07"

      name: "plane\_separation"

      title: "Separation of planes"

      description: "Data, control and knowledge concerns are separated. The knowledge/ tree contains no runtime code, only declarative definitions and evidence. Control plane endpoints are isolated from data plane handlers."

      fitness\_definition: "definitions/fitness/axioms/A07\_plane\_separation.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

      suites:

        \- "ci\_minimal"

        \- "ci\_full"

      severity: "blocker"

      owner\_team: "platform-identity"\\n    \- id: "A08"

      name: "idempotency"

      title: "Idempotent operations"

      description: "Key operations such as login, token refresh and event publishing are idempotent under retries, with idempotency keys where needed."

      fitness\_definition: "definitions/fitness/axioms/A08\_idempotency.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

        \- "evidence/coverage/integration\_coverage.json"

      suites:

        \- "ci\_minimal"

        \- "ci\_full"

      severity: "critical"

      owner\_team: "platform-identity"\\n    \- id: "A09"

      name: "bounded\_resources"

      title: "Bounded resource usage"

      description: "Connection pools, queue sizes and caches for the Identity Cell are explicitly bounded and tested under load to prevent resource exhaustion."

      fitness\_definition: "definitions/fitness/axioms/A09\_bounded\_resources.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

      suites:

        \- "ci\_minimal"

        \- "ci\_full"

      severity: "blocker"

      owner\_team: "platform-identity"\\n    \- id: "A10"

      name: "timeouts"

      title: "Timeouts for external calls"

      description: "All outbound calls from the Identity Cell (RPC and external IdPs) have explicit timeouts and retry policies defined and tested."

      fitness\_definition: "definitions/fitness/axioms/A10\_timeouts.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

        \- "evidence/coverage/fitness\_coverage.json"

      suites:

        \- "ci\_minimal"

        \- "ci\_full"

        \- "pre\_release"

      severity: "blocker"

      owner\_team: "platform-identity"\\n    \- id: "A11"

      name: "tracing"

      title: "End-to-end tracing"

      description: "The Identity Cell propagates trace context across all inbound and outbound calls and emits spans as defined in trace\_spans.yaml and traces.schema.yaml."

      fitness\_definition: "definitions/fitness/axioms/A11\_tracing.yaml"

      expected\_evidence:

        \- "evidence/observability/traces\_sample.json"

        \- "evidence/conformance/latest\_report.json"

      suites:

        \- "ci\_minimal"

        \- "ci\_full"

      severity: "critical"

      owner\_team: "platform-identity"\\n    \- id: "A12"

      name: "backward\_compatibility"

      title: "Backward compatibility"

      description: "RPC and event contracts preserve backward compatibility across versions according to the rules documented in identity.rpc.versioning.md."

      fitness\_definition: "definitions/fitness/axioms/A12\_backward\_compatibility.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

        \- "evidence/coverage/integration\_coverage.json"

      suites:

        \- "ci\_full"

        \- "pre\_release"

      severity: "blocker"

      owner\_team: "platform-identity"\\n    \- id: "A13"

      name: "deprecation\_policy"

      title: "Deprecation policy"

      description: "Deprecated operations are announced, logged and supported for a defined window. Deprecation is encoded in contracts and documented for clients."

      fitness\_definition: "definitions/fitness/axioms/A13\_deprecation\_policy.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

      suites:

        \- "ci\_full"

      severity: "warning"

      owner\_team: "platform-identity"\\n    \- id: "A14"

      name: "version\_negotiation"

      title: "Contract version negotiation"

      description: "The Identity Cell can serve multiple contract versions concurrently and negotiate versions with clients as defined in the RPC versioning strategy."

      fitness\_definition: "definitions/fitness/axioms/A14\_version\_negotiation.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

      suites:

        \- "ci\_full"

      severity: "warning"

      owner\_team: "platform-identity"\\n    \- id: "A15"

      name: "contract\_evolution"

      title: "Contract evolution strategy"

      description: "Contract evolution follows a documented strategy including canary deployments, dual-writing and safe field additions."

      fitness\_definition: "definitions/fitness/axioms/A15\_contract\_evolution.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

        \- "evidence/conformance/history/"

      suites:

        \- "ci\_full"

        \- "pre\_release"

      severity: "critical"

      owner\_team: "platform-identity"\\n    \- id: "A16"

      name: "policy\_externalization"

      title: "Externalized policies"

      description: "Authorization and rate limiting policies are externalized into Rego and configuration files rather than embedded in business code."

      fitness\_definition: "definitions/fitness/axioms/A16\_policy\_externalization.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

        \- "evidence/security/vulnerability\_report.json"

      suites:

        \- "ci\_minimal"

        \- "ci\_full"

      severity: "blocker"

      owner\_team: "platform-identity"\\n    \- id: "A17"

      name: "least\_privilege"

      title: "Least privilege"

      description: "User and workload identities are granted only the minimal set of permissions required for their responsibilities."

      fitness\_definition: "definitions/fitness/axioms/A17\_least\_privilege.yaml"

      expected\_evidence:

        \- "evidence/security/sbom.spdx.json"

        \- "evidence/security/vulnerability\_report.json"

      suites:

        \- "ci\_minimal"

        \- "ci\_full"

      severity: "blocker"

      owner\_team: "platform-identity"\\n    \- id: "A18"

      name: "secure\_communications"

      title: "Secure communications"

      description: "All communications between the Identity Cell and other Cells or external IdPs use TLS with authenticated peers."

      fitness\_definition: "definitions/fitness/axioms/A18\_secure\_communications.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

        \- "evidence/security/dependency\_scan\_report.json"

      suites:

        \- "ci\_full"

        \- "pre\_release"

      severity: "blocker"

      owner\_team: "platform-identity"\\n    \- id: "A19"

      name: "workload\_identity"

      title: "Workload identity"

      description: "Internal service-to-service calls are authenticated using workload identities rather than shared secrets."

      fitness\_definition: "definitions/fitness/axioms/A19\_workload\_identity.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

      suites:

        \- "ci\_full"

      severity: "critical"

      owner\_team: "platform-identity"\\n    \- id: "A20"

      name: "capability\_tokens"

      title: "Capability tokens"

      description: "Capability tokens encode fine-grained permissions and scopes, and are validated consistently across Identity operations."

      fitness\_definition: "definitions/fitness/axioms/A20\_capability\_tokens.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

      suites:

        \- "ci\_full"

        \- "pre\_release"

      severity: "critical"

      owner\_team: "platform-identity"\\n    \- id: "A21"

      name: "auditability"

      title: "Auditability"

      description: "Security-sensitive operations (login, logout, privilege changes) are logged using structured events and retained according to audit requirements."

      fitness\_definition: "definitions/fitness/axioms/A21\_auditability.yaml"

      expected\_evidence:

        \- "evidence/observability/logs\_sample.json"

        \- "evidence/conformance/latest\_report.json"

      suites:

        \- "ci\_minimal"

        \- "ci\_full"

      severity: "blocker"

      owner\_team: "platform-identity"\\n    \- id: "A22"

      name: "failure\_modes"

      title: "Defined failure modes"

      description: "The Identity Cell fails in controlled and observable ways, with clear error codes and circuit breaking around fragile dependencies."

      fitness\_definition: "definitions/fitness/axioms/A22\_failure\_modes.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

        \- "evidence/observability/logs\_sample.json"

      suites:

        \- "ci\_full"

        \- "pre\_release"

      severity: "critical"

      owner\_team: "platform-identity"\\n    \- id: "A23"

      name: "recovery\_procedures"

      title: "Recovery procedures"

      description: "Recovery procedures for incident scenarios are defined, tested and documented in runbooks."

      fitness\_definition: "definitions/fitness/axioms/A23\_recovery\_procedures.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

        \- "evidence/coverage/integration\_coverage.json"

      suites:

        \- "ci\_full"

        \- "pre\_release"

      severity: "critical"

      owner\_team: "platform-identity"\\n    \- id: "A24"

      name: "data\_management"

      title: "Data management"

      description: "Identity-related data is replicated, backed up and retained according to business and regulatory requirements."

      fitness\_definition: "definitions/fitness/axioms/A24\_data\_management.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

        \- "evidence/security/sbom.spdx.json"

      suites:

        \- "ci\_full"

      severity: "critical"

      owner\_team: "platform-identity"\\n    \- id: "A25"

      name: "observability\_baseline"

      title: "Observability baseline"

      description: "The Identity Cell emits a baseline set of metrics, logs and traces as defined in observability contracts and telemetry catalogs."

      fitness\_definition: "definitions/fitness/axioms/A25\_observability\_baseline.yaml"

      expected\_evidence:

        \- "evidence/observability/metrics\_snapshot.json"

        \- "evidence/observability/logs\_sample.json"

        \- "evidence/observability/traces\_sample.json"

      suites:

        \- "ci\_minimal"

        \- "ci\_full"

      severity: "blocker"

      owner\_team: "platform-identity"\\n    \- id: "A26"

      name: "standard\_telemetry"

      title: "Standard telemetry"

      description: "Telemetry follows standard naming conventions, units and label sets defined in metrics\_catalog.yaml, log\_events.yaml and trace\_spans.yaml."

      fitness\_definition: "definitions/fitness/axioms/A26\_standard\_telemetry.yaml"

      expected\_evidence:

        \- "evidence/observability/metrics\_snapshot.json"

        \- "evidence/observability/logs\_sample.json"

        \- "evidence/observability/traces\_sample.json"

      suites:

        \- "ci\_minimal"

        \- "ci\_full"

      severity: "critical"

      owner\_team: "platform-identity"\\n    \- id: "A27"

      name: "change\_management"

      title: "Change management"

      description: "Changes to the Identity Cell follow documented processes, are recorded in ADRs and are validated by fitness suites before promotion."

      fitness\_definition: "definitions/fitness/axioms/A27\_change\_management.yaml"

      expected\_evidence:

        \- "evidence/conformance/history/"

        \- "evidence/coverage/fitness\_coverage.json"

      suites:

        \- "ci\_full"

        \- "pre\_release"

      severity: "critical"

      owner\_team: "platform-identity"\\n    \- id: "A28"

      name: "graceful\_degradation"

      title: "Graceful degradation"

      description: "Under partial failures or overload, the Identity Cell degrades gracefully, shedding non-critical features while preserving core authentication."

      fitness\_definition: "definitions/fitness/axioms/A28\_graceful\_degradation.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

        \- "evidence/observability/metrics\_snapshot.json"

      suites:

        \- "ci\_full"

      severity: "critical"

      owner\_team: "platform-identity"\\n    \- id: "A29"

      name: "testability"

      title: "Testability"

      description: "The Identity Cell exposes hooks and supports test environments that allow reproducible execution of unit, integration and fitness tests."

      fitness\_definition: "definitions/fitness/axioms/A29\_testability.yaml"

      expected\_evidence:

        \- "evidence/coverage/unit\_coverage.json"

        \- "evidence/coverage/integration\_coverage.json"

        \- "evidence/coverage/fitness\_coverage.json"

      suites:

        \- "ci\_minimal"

        \- "ci\_full"

        \- "pre\_release"

      severity: "blocker"

      owner\_team: "platform-identity"\\n    \- id: "A30"

      name: "governance"

      title: "Governance and conformance"

      description: "The Identity Cell participates in the AXIOMS-wide governance process. CTK runs on every change and produces a bill of health stored under evidence/conformance/."

      fitness\_definition: "definitions/fitness/axioms/A30\_governance.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

        \- "evidence/conformance/history/"

      suites:

        \- "ci\_full"

        \- "pre\_release"

      severity: "blocker"

      owner\_team: "platform-identity"\\n    \- id: "A31"

      name: "knowledge\_plane"

      title: "Knowledge Plane"

      description: "The Identity Cell exposes a complete Knowledge Plane with definitions, documentation and evidence under the canonical knowledge/ layout, enabling CTK and other tools to reason about architecture."

      fitness\_definition: "definitions/fitness/axioms/A31\_knowledge\_plane.yaml"

      expected\_evidence:

        \- "evidence/conformance/latest\_report.json"

        \- "evidence/coverage/fitness\_coverage.json"

      suites:

        \- "ci\_minimal"

        \- "ci\_full"

      severity: "blocker"

      owner\_team: "platform-identity"\\nknowledge\_paths:

  compliance\_policy\_manifest\_file: "definitions/compliance/policy\_manifest.yaml"

  compliance\_regulatory\_map\_file: "definitions/compliance/regulatory\_map.yaml"

  conformance\_history\_dir: "evidence/conformance/history"

  conformance\_latest\_report\_file: "evidence/conformance/latest\_report.json"

  coverage\_fitness\_file: "evidence/coverage/fitness\_coverage.json"

  coverage\_integration\_file: "evidence/coverage/integration\_coverage.json"

  coverage\_unit\_file: "evidence/coverage/unit\_coverage.json"

  definitions\_dir: "definitions"

  dependencies\_file: "definitions/cell/dependencies.yaml"

  docs\_compliance\_overview\_file: "docs/COMPLIANCE\_OVERVIEW.md"

  docs\_conformance\_report\_file: "docs/CONFORMANCE\_REPORT.md"

  docs\_contract\_index\_file: "docs/CONTRACT\_INDEX.md"

  docs\_dir: "docs"

  docs\_fitness\_overview\_file: "docs/FITNESS\_OVERVIEW.md"

  docs\_observability\_guide\_file: "docs/OBSERVABILITY\_GUIDE.md"

  docs\_spec\_file: "docs/SPECIFICATION.md"

  evidence\_dir: "evidence"

  fitness\_axioms\_dir: "definitions/fitness/axioms"

  fitness\_sla\_slo\_file: "definitions/fitness/sla-slo.yaml"

  fitness\_suites\_file: "definitions/fitness/suites.yaml"

  fitness\_thresholds\_file: "definitions/fitness/thresholds.yaml"

  governance\_risk\_register\_file: "definitions/governance/risk\_register.yaml"

  observability\_logs\_sample\_file: "evidence/observability/logs\_sample.json"

  observability\_metrics\_snapshot\_file: "evidence/observability/metrics\_snapshot.json"

  observability\_traces\_sample\_file: "evidence/observability/traces\_sample.json"

  operations\_configuration\_guide\_file: "docs/operations/CONFIGURATION\_GUIDE.md"

  operations\_deployment\_guide\_file: "docs/operations/DEPLOYMENT\_GUIDE.md"

  operations\_manual\_file: "docs/operations/MANUAL.md"

  operations\_runbooks\_file: "docs/operations/RUNBOOKS.md"

  policy\_dir: "definitions/contracts/policy"

  root: "."

  rpc\_contract\_file: "definitions/contracts/rpc/openapi.yaml"

  security\_dependency\_scan\_file: "evidence/security/dependency\_scan\_report.json"

  security\_sbom\_file: "evidence/security/sbom.spdx.json"

  security\_vulnerability\_report\_file: "evidence/security/vulnerability\_report.json"

  telemetry\_dir: "definitions/telemetry"

  events\_dir: "definitions/contracts/events"

  observability\_contract\_dir: "definitions/contracts/observability"

  contract\_index\_file: "definitions/contracts/contract-index.yaml"

  cell\_definition\_file: "definitions/cell/cell.yaml"

  versions\_file: "definitions/cell/versions.yaml"\\nmetadata:

  bounded\_context: "UserAuthenticationAndAuthorization"

  cell\_id: "identity"

  cell\_name: "Identity Cell"

  criticality\_tier: "tier-0"

  description: "The Identity Cell implements core authentication, authorization and identity lifecycle services across tenants, enforcing strong security and observability baselines."

  domain: "IdentityAndAccessManagement"

  lifecycle\_stage: "production"

  owner\_contacts:

    email: "identity-team@example.com"

    slack: "platform-identity"

  owner\_team: "platform-identity"

  supported\_environments:

    \- "dev"

    \- "staging"

    \- "prod"

  tags:

    \- "identity"

    \- "security"

    \- "multi-tenant"

    \- "axioms-compliant"

  version: "1.2.0"\\ntooling:

  ctk:

    minimum\_supported\_version: "1.0.0"

    profile: "default"

    report\_format\_version: "1.0.0"

  generators:

    contract\_index:

      tool: "axioms-contract-indexer"

      version: "0.4.0"

    sbom:

      tool: "syft"

      version: "1.2.0"\\nIf you want next, we can extract from this example a **formal YAML schema** (e.g. JSON Schema or OpenAPI-like) so the CTK can validate manifest.yaml structure strictly.

Short answer:  
 **cell.yaml becomes the canonical *domain & identity* description of the Cell; manifest.yaml is the canonical *knowledge-plane & CTK wiring* description.**

Everything “how CTK runs, how axioms map to evidence, where files live, which suites gate which pipelines” stays in manifest.yaml.  
 Everything “what this Cell *is* in DDD/domain/operational terms” lives in cell.yaml.

Let me break that down and then show you a full cell.yaml example that **complements** (not duplicates) the extended manifest.yaml we just designed.

---

## **1\. Division of responsibilities: manifest.yaml vs cell.yaml** {#1.-division-of-responsibilities:-manifest.yaml-vs-cell.yaml}

### **1.1 What manifest.yaml owns now**

Based on what we just built, knowledge/manifest.yaml is:

* The **entrypoint** for CTK and other tools.

* The place that encodes:

  * All **knowledge\_paths** (where definitions, docs, evidence live).

  * The **architectural\_profile** in a CTK-friendly shape (planes, boundaries, communication).

  * The **axioms enforcement profile** (which Axx is a gate in which suite).

  * The **mapping A1–A31 → fitness file \+ expected evidence \+ suites \+ severity**.

  * Some high-level **metadata** (cell\_id, version, owner, etc.) to tag reports.

In other words: manifest.yaml is the **wiring diagram** of the Knowledge Plane for automation.

### **1.2 What is left – and what should be moved – into cell.yaml**

Given that, definitions/cell/cell.yaml should be the **canonical identity & domain description** of the Cell:

* Strongly **domain-centered** and **implementation-agnostic**.

* Stable over time (changes less often than CTK wiring).

* The primary place for:

  * Bounded context and domain language.

  * Domain responsibilities and capabilities.

  * Surfaces as *logical* concepts (not protocols/URLs).

  * Data classification, PII, regulatory nature of the *business* data.

  * Multi-tenancy model and isolation semantics.

  * High-level invariants (what must never happen / must always hold).

**Important point**:  
 Right now, some identity fields exist in both manifest.metadata and your original comment for cell.yaml. To avoid stupid drift, the clean split is:

* cell.yaml is the **source of truth** for identity & domain semantics.

* manifest.yaml either:

  * **duplicates a minimal subset** (cell\_id, version, maybe criticality) for CTK convenience and **must match** cell.yaml (CTK can check this), or

  * Simply points to cell.yaml and only keeps what CTK cannot infer from there.

You don’t have to choose now, but conceptually:

**Cell identity & semantics** → cell.yaml  
 **Knowledge-plane wiring, axioms, paths, gating** → manifest.yaml

---

# 

# **4\. Technical specification for definitions/cell/cell.yaml** {#4.-technical-specification-for-definitions/cell/cell.yaml}

Location:

/cell-root/knowledge/definitions/cell/cell.yaml\\n**Purpose**: Canonical description of *what this Cell is* in the domain sense and how it is positioned in the overall system, **without CTK wiring**.

CTK *may* read this file for checks like A1, A2, A5, A6, A7, A24, but it does not drive test execution from here – that logic lives in manifest.yaml \+ definitions/fitness.

## **4.1 Top-level structure (sorted keys)** {#4.1-top-level-structure-(sorted-keys)}

api\_version: string

classification: object

domain: object

metadata: object

multi\_tenancy: object

planes: object

responsibilities: object

surfaces: object\\n**api\_version**

Version of the cell.yaml schema.

api\_version: "axioms.erparom.dev/cell.v1alpha1"\\n**metadata**

Domain-level identity of the Cell.

metadata:

  cell\_id: string            \# short stable ID, same as manifest.metadata.cell\_id

  name: string               \# human name

  description: string        \# domain/functional description

  domain: string             \# e.g. "IdentityAndAccessManagement"

  bounded\_context: string    \# DDD bounded context name

  owner\_team: string

  owner\_contacts:

    email: string

    slack: string

  criticality\_tier: string   \# e.g. "tier-0", "tier-1"

  repo:

    url: string

    default\_branch: string\\n**domain**

High-level domain semantics.

domain:

  primary\_entities:

    \- name: string           \# e.g. "User"

      description: string

    \- ...

  primary\_use\_cases:

    \- id: string             \# e.g. "login"

      name: string

      description: string

      category: string       \# e.g. "authentication", "administration"

  invariants:

    \- id: string             \# e.g. "INV-001"

      description: string    \# e.g. "A disabled user must never be able to authenticate."\\n**responsibilities**

Structured responsibility split.

responsibilities:

  must\_do:

    \- string                 \# required responsibilities

  must\_not\_do:

    \- string                 \# things this Cell explicitly does NOT do

  coordination:

    \- string                 \# how this Cell cooperates with others at a conceptual level\\n**classification**

Data & regulatory classification in **domain terms** (not tool-specific).

classification:

  data\_domains:

    \- string                 \# e.g. "PII", "Credentials"

  data\_sensitivity\_level: string   \# e.g. "high", "medium"

  regulatory\_tags:

    \- string                 \# e.g. "GDPR", "SOC2"

  pii\_types:

    \- string                 \# e.g. "email", "full\_name", "ip\_address"\\n**multi\_tenancy**

How the Cell handles tenants at a *model* level.

multi\_tenancy:

  model: string              \# e.g. "pooled", "schema-per-tenant", "db-per-tenant"

  isolation\_level: string    \# e.g. "row-level \+ strict tenant scoping"

  tenant\_identifier: string  \# e.g. "tenant\_id"

  notes: string\\n**planes**

How this Cell participates in each plane, in **logical** (non-protocol) terms.

planes:

  data:

    description: string

    primary\_operations:

      \- string               \# e.g. "Authenticate user", "Issue token"

  control:

    description: string

    primary\_operations:

      \- string               \# e.g. "Apply identity configuration", "Rotate keys"

  knowledge:

    description: string

    primary\_operations:

      \- string               \# e.g. "Emit identity telemetry", "Record audit events"\\n**surfaces**

Logical surfaces, *not* URL/port/protocol-level. Those are handled in contracts and manifest.

surfaces:

  rpc:

    \- id: string             \# e.g. "IdentityPublicAPI"

      audience: string       \# e.g. "external", "internal"

      purpose: string        \# e.g. "User authentication and token issuance."

      operations:

        \- string             \# e.g. "login", "logout", "refreshToken"

  events:

    \- id: string             \# e.g. "IdentityEvents"

      purpose: string        \# e.g. "Notify system about identity lifecycle changes."

      event\_types:

        \- string             \# e.g. "UserRegistered", "UserPasswordChanged"

  policy:

    \- id: string             \# e.g. "IdentityAuthZPolicy"

      purpose: string        \# e.g. "Decide whether a given subject can perform an operation."

      decision\_points:

        \- string             \# e.g. "authorizeRequest", "evaluateRoleChange"\\n

---

## **3\. Full cell.yaml example that complements the manifest** {#3.-full-cell.yaml-example-that-complements-the-manifest}

This example fits your Identity Cell and **avoids stepping on manifest’s toes**:

* No CTK wiring.

* No knowledge\_paths.

* No suites, thresholds, evidence paths.

* Pure domain & identity semantics.

api\_version: "axioms.erparom.dev/cell.v1alpha1"\\nclassification:

  data\_domains:

    \- "Identity"

    \- "Authentication"

    \- "Authorization"

  data\_sensitivity\_level: "high"

  pii\_types:

    \- "email"

    \- "full\_name"

    \- "ip\_address"

    \- "user\_identifier"

  regulatory\_tags:

    \- "GDPR"

    \- "SOC2"

    \- "SecurityCritical"\\ndomain:

  bounded\_context: "UserAuthenticationAndAuthorization"

  primary\_entities:

    \- name: "User"

      description: "Represents an end user or account that can authenticate and hold permissions."

    \- name: "Credential"

      description: "Represents authentication material such as passwords or federated identity assertions."

    \- name: "Token"

      description: "Represents issued capability or access tokens associated with users and workloads."

    \- name: "Role"

      description: "Represents a collection of permissions granted to users or workloads."

  primary\_use\_cases:

    \- id: "login"

      name: "User login"

      description: "Authenticate a user using credentials or federated identity and establish a session or token."

      category: "authentication"

    \- id: "logout"

      name: "User logout"

      description: "Terminate an active session or invalidate tokens associated with a user."

      category: "authentication"

    \- id: "refresh\_token"

      name: "Refresh token"

      description: "Issue a new capability or access token from a valid refresh token while enforcing security policies."

      category: "authentication"

    \- id: "manage\_roles"

      name: "Manage roles and permissions"

      description: "Create, update and delete roles and their associated permissions for a tenant."

      category: "authorization\_administration"

    \- id: "manage\_users"

      name: "Manage users"

      description: "Create, update, disable and delete user accounts and profiles within a tenant."

      category: "identity\_administration"

  invariants:

    \- id: "INV-001"

      description: "A disabled user must never be able to authenticate successfully."

    \- id: "INV-002"

      description: "Tokens must always be bound to a single tenant and must never be accepted across tenant boundaries."

    \- id: "INV-003"

      description: "Every authorization decision must be reproducible from audit logs and policy definitions."

    \- id: "INV-004"

      description: "Credentials must never be logged or exposed in cleartext in any log or metric."\\nmetadata:

  cell\_id: "identity"

  criticality\_tier: "tier-0"

  description: "The Identity Cell implements authentication, authorization and identity lifecycle services across tenants, enforcing strong security and observability baselines."

  domain: "IdentityAndAccessManagement"

  name: "Identity Cell"

  owner\_contacts:

    email: "identity-team@example.com"

    slack: "platform-identity"

  owner\_team: "platform-identity"

  repo:

    default\_branch: "main"

    url: "https://github.com/example-org/cells/identity.git"\\nmulti\_tenancy:

  isolation\_level: "row-level-strict"

  model: "pooled"

  notes: "All identity records are stored in shared tables with strict tenant scoping enforced at the repository and service layers. Tokens and audit logs always carry tenant\_id."

  tenant\_identifier: "tenant\_id"\\nplanes:

  control:

    description: "Applies configuration and rollout decisions to the Identity Cell, including feature flags, contract versions and operational thresholds."

    primary\_operations:

      \- "Apply identity configuration from the global control plane."

      \- "Coordinate rollout strategies, including canary and blue/green deployments."

      \- "Expose health and readiness signals to orchestrators and control plane components."

  data:

    description: "Executes core identity operations such as authentication, token issuance and user lifecycle changes."

    primary\_operations:

      \- "Authenticate end users using credentials or federated identity."

      \- "Issue, validate and revoke capability and access tokens."

      \- "Manage user identities, credentials and roles per tenant."

      \- "Emit domain events for identity lifecycle changes."

  knowledge:

    description: "Captures identity-related telemetry, conformance evidence and audit records, and surfaces them through the Knowledge Plane."

    primary\_operations:

      \- "Emit metrics, logs and traces for identity flows."

      \- "Record and expose audit events for security-sensitive operations."

      \- "Provide evidence to CTK and other tools for evaluating fitness and compliance."\\nresponsibilities:

  coordination:

    \- "Coordinate with the Notifications Cell by emitting user lifecycle events such as UserRegistered and UserPasswordChanged."

    \- "Coordinate with the Billing Cell by consuming payment events when identity features are tied to billing status."

    \- "Coordinate with the API gateway and frontend layers by providing clear authentication and authorization surfaces."

  must\_do:

    \- "Authenticate users and workloads securely and reliably."

    \- "Enforce tenant isolation and least privilege for permissions and roles."

    \- "Provide consistent capability tokens for authorization decisions."

    \- "Maintain accurate, auditable records of security-sensitive operations."

  must\_not\_do:

    \- "Directly handle non-identity business logic such as payments or content management."

    \- "Access or manage data domains not classified as identity or authentication."

    \- "Implement custom network protocols or bypass the common observability stack."\\nsurfaces:

  events:

    \- id: "IdentityLifecycleEvents"

      purpose: "Notify other Cells about identity lifecycle changes."

      event\_types:

        \- "UserRegistered"

        \- "UserPasswordChanged"

        \- "UserDisabled"

        \- "UserRolesUpdated"

  policy:

    \- id: "IdentityAuthorizationPolicy"

      purpose: "Decide whether a subject is allowed to perform an operation on a resource."

      decision\_points:

        \- "authorizeRequest"

        \- "evaluateRoleChange"

        \- "evaluateTenantScopedAccess"

  rpc:

    \- id: "IdentityPublicAPI"

      audience: "external"

      purpose: "Expose authentication and basic user identity operations to external clients via the API gateway."

      operations:

        \- "login"

        \- "logout"

        \- "refreshToken"

        \- "introspectToken"

    \- id: "IdentityAdminAPI"

      audience: "internal"

      purpose: "Expose administrative endpoints for managing users, roles and tenant-level identity settings."

      operations:

        \- "createUser"

        \- "updateUser"

        \- "disableUser"

        \- "assignRole"

        \- "revokeRole"\\n

---

So, **what’s left for cell.yaml?**

* All the **domain semantics** and **identity** of the Cell.

* A clear, stable description of:

  * What the Cell is for.

  * What it is responsible for (and what it must not do).

  * How its domain is shaped (entities, use cases, invariants).

  * How it participates in planes at a conceptual level.

  * How tenants are modeled and isolated.

  * Which logical surfaces it exposes (RPC, events, policy).

Everything else—the mapping to CTK, axioms, fitness suites, evidence paths, and knowledge-plane wiring—stays in manifest.yaml.

Good, now we’re sharpening the edges instead of smearing them.  
 Let’s nail **both** files cleanly, with **spec \+ full example** for each, aligned with everything we’ve already defined.

---

# **5\. knowledge/definitions/cell/versions.yaml** {#5.-knowledge/definitions/cell/versions.yaml}

## **5.1 Purpose** {#5.1-purpose}

versions.yaml is the **canonical release history** of the Cell.

It is:

* The **single source of truth** for:

  * Which versions of the Cell have existed.

  * When they were released.

  * How they relate to contract changes, migrations, and deprecations.

* Used by **CTK and governance** to:

  * Correlate **conformance evidence** (evidence/conformance/history/) with Cell versions.

  * Check **A12–A15 and A27–A30**:

    * Backward compatibility (A12).

    * Deprecation policies (A13).

    * Version negotiation and evolution (A14–A15).

    * Change management and governance (A27–A30).

**Manifest vs versions.yaml**

* manifest.yaml.metadata.version \= **current** version.

* versions.yaml \= **full historical log** of all relevant versions.

CTK will:

1. Ensure current\_version in versions.yaml matches manifest.metadata.version.

2. Ensure versions\[\] has an entry for that version.

3. Optionally ensure there is a conformance report per version in evidence/conformance/history/.

## **1.2 Schema / structure (conceptual)** {#1.2-schema-/-structure-(conceptual)}

api\_version: string

current\_version: string

versions:

  \- version: string

    release\_date: string (ISO-8601 date)

    release\_type: string ("ga" | "rc" | "beta" | "alpha" | "hotfix")

    lifecycle\_stage: string ("production" | "staging" | "deprecated" | "retired")

    description: string\\n    git:

      tag: string

      commit: string\\n    compatibility:

      rpc:

        status: string ("backward-compatible" | "breaking" | "no-change")

        notes: string

      events:

        status: string

        notes: string

      policy:

        status: string

        notes: string\\n    contracts:

      rpc\_spec\_version: string         \# semantic "intent" version for contracts

      events\_spec\_version: string

      policy\_spec\_version: string

      observability\_spec\_version: string\\n    migrations:

      required: boolean

      description: string

      playbook\_ref: string\\n    deprecations:

      introduced:

        \- id: string

          summary: string

          details\_ref: string

      removed:

        \- id: string

          summary: string

          details\_ref: string\\n    axioms\_scope:

      enforced\_axioms:

        \- string   \# "A01", ...

      relaxed\_axioms:

        \- string   \# "A13", ...

      notes: string\\nField rationale

* api\_version  
   Schema version for versions.yaml itself (allows evolution over time).

* current\_version  
   Must match metadata.version in manifest.yaml. CTK checks this.

* versions\[\]  
   Ordered history (oldest to newest, or vice versa – we can define canonical order later; CTK can sort by release\_date).

Per entry:

* version  
   Semantic version of the Cell (MAJOR.MINOR.PATCH).

* release\_date  
   When the version was released/accepted into the main lifecycle stage (ISO-8601 YYYY-MM-DD).

* release\_type  
   High-level classification:

  * ga – general availability.

  * rc – release candidate.

  * beta, alpha – pre-production.

  * hotfix – emergency patch.

* lifecycle\_stage  
   Where this version currently stands:

  * production, staging, deprecated, retired.

* description  
   Concise summary of the release focus (e.g. “Initial GA with password auth”, “Added MFA and new events”).

* git  
   Binds version to source control:

  * tag – tag name.

  * commit – full SHA for traceability.

* compatibility  
   Explicit statement for **A12–A15**:

  * Separate status for RPC, events, and policy surfaces.

  * status indicates the type of compatibility change.

  * notes explain any non-trivial behavior.

* contracts  
   Logical “intent versions” of each contract type.  
   This is not necessarily the same as the Cell version; it lets you say, for example, “contracts stayed at 1.0.0 while implementation moved to 1.2.3”.

* migrations  
   For A24 (data management) and A27 (change management):

  * required – does this version require a data migration?

  * description – what kind of change.

  * playbook\_ref – reference into docs/operations/DEPLOYMENT\_GUIDE.md or RUNBOOKS.md for the migration procedure.

* deprecations  
   Connects to A13:

  * introduced – new deprecations introduced by this version.

  * removed – deprecations that were fully cleaned up in this version.

* axioms\_scope  
   Connects version history to governance:

  * enforced\_axioms – which Axioms are strictly enforced for this version.

  * relaxed\_axioms – which ones are temporarily downgraded or not applied.

  * notes – rationale for any relaxations or staged adoption.

---

## **1.3 Full example: knowledge/definitions/cell/versions.yaml (Identity Cell)** {#1.3-full-example:-knowledge/definitions/cell/versions.yaml-(identity-cell)}

api\_version: "axioms.erparom.dev/cell-versions.v1alpha1"\\ncurrent\_version: "1.2.0"\\nversions:

  \- version: "1.0.0"

    release\_date: "2025-10-15"

    release\_type: "ga"

    lifecycle\_stage: "deprecated"

    description: "Initial GA release of the Identity Cell with password-based authentication, basic token issuance and identity lifecycle events."\\n    git:

      tag: "identity-1.0.0"

      commit: "a1b2c3d4e5f60123456789abcdef0123456789a"\\n    compatibility:

      rpc:

        status: "backward-compatible"

        notes: "First public version; all RPC endpoints defined from scratch, no prior compatibility constraints."

      events:

        status: "backward-compatible"

        notes: "UserRegistered and UserPasswordChanged events introduced."

      policy:

        status: "backward-compatible"

        notes: "Initial authorization policy rules defined as Rego modules."\\n    contracts:

      rpc\_spec\_version: "1.0.0"

      events\_spec\_version: "1.0.0"

      policy\_spec\_version: "1.0.0"

      observability\_spec\_version: "1.0.0"\\n    migrations:

      required: true

      description: "Initial database schema creation for users, credentials, tokens and roles."

      playbook\_ref: "docs/operations/DEPLOYMENT\_GUIDE.md\#identity-initial-schema-migration"\\n    deprecations:

      introduced: \[\]

      removed: \[\]\\n    axioms\_scope:

      enforced\_axioms:

        \- "A01"

        \- "A02"

        \- "A03"

        \- "A04"

        \- "A05"

        \- "A06"

        \- "A07"

        \- "A08"

        \- "A09"

        \- "A10"

        \- "A11"

        \- "A16"

        \- "A17"

        \- "A18"

        \- "A21"

        \- "A25"

        \- "A26"

        \- "A29"

        \- "A30"

        \- "A31"

      relaxed\_axioms:

        \- "A12"

        \- "A13"

        \- "A14"

        \- "A15"

        \- "A22"

        \- "A23"

        \- "A24"

        \- "A27"

        \- "A28"

      notes: "Initial release strictly enforces isolation, security and observability. Contract evolution, advanced failure modes and full change management processes are staged for subsequent versions."\\n  \- version: "1.1.0"

    release\_date: "2025-11-20"

    release\_type: "ga"

    lifecycle\_stage: "deprecated"

    description: "Adds multi-factor authentication (MFA) flows and new events for MFA enrollment and verification."\\n    git:

      tag: "identity-1.1.0"

      commit: "b2c3d4e5f60123456789abcdef0123456789ab1c"\\n    compatibility:

      rpc:

        status: "backward-compatible"

        notes: "New MFA endpoints added; all previously existing endpoints remain unchanged and contract evolution rules are respected."

      events:

        status: "backward-compatible"

        notes: "New events MfaEnrolled and MfaVerified added; existing events unchanged."

      policy:

        status: "backward-compatible"

        notes: "Authorization policy extended to handle MFA-related permissions using backward-compatible rule additions."\\n    contracts:

      rpc\_spec\_version: "1.1.0"

      events\_spec\_version: "1.1.0"

      policy\_spec\_version: "1.1.0"

      observability\_spec\_version: "1.1.0"\\n    migrations:

      required: true

      description: "Schema changes to support MFA enrollment state, recovery codes and verification metadata."

      playbook\_ref: "docs/operations/DEPLOYMENT\_GUIDE.md\#identity-mfa-schema-migration"\\n    deprecations:

      introduced:

        \- id: "DEP-001"

          summary: "Deprecated legacy password reset endpoint /v1/password/resetLegacy."

          details\_ref: "docs/SPECIFICATION.md\#deprecations-identity-1-1-0"

      removed: \[\]\\n    axioms\_scope:

      enforced\_axioms:

        \- "A01"

        \- "A02"

        \- "A03"

        \- "A04"

        \- "A05"

        \- "A06"

        \- "A07"

        \- "A08"

        \- "A09"

        \- "A10"

        \- "A11"

        \- "A12"

        \- "A13"

        \- "A16"

        \- "A17"

        \- "A18"

        \- "A19"

        \- "A20"

        \- "A21"

        \- "A22"

        \- "A25"

        \- "A26"

        \- "A27"

        \- "A29"

        \- "A30"

        \- "A31"

      relaxed\_axioms:

        \- "A14"

        \- "A15"

        \- "A23"

        \- "A24"

        \- "A28"

      notes: "Backward compatibility guarantees are now actively enforced via contract tests (A12, A13). Advanced failure mode and graceful degradation patterns are partially deployed but not yet fully covered."\\n  \- version: "1.2.0"

    release\_date: "2025-12-05"

    release\_type: "ga"

    lifecycle\_stage: "production"

    description: "Introduces formal contract version negotiation, improved failure isolation and fully integrated CTK-driven governance."\\n    git:

      tag: "identity-1.2.0"

      commit: "c3d4e5f60123456789abcdef0123456789ab1cd2"\\n    compatibility:

      rpc:

        status: "backward-compatible"

        notes: "Implements header-based version negotiation for IdentityPublicAPI and IdentityAdminAPI without breaking existing clients."

      events:

        status: "backward-compatible"

        notes: "Event schemas extended with optional fields only; tolerant readers ensure compatibility."

      policy:

        status: "backward-compatible"

        notes: "Policy modules extended with new rules; no breaking changes in decision inputs or outputs."\\n    contracts:

      rpc\_spec\_version: "1.2.0"

      events\_spec\_version: "1.2.0"

      policy\_spec\_version: "1.2.0"

      observability\_spec\_version: "1.2.0"\\n    migrations:

      required: false

      description: "No schema migrations required; changes limited to contract and behavior evolution."

      playbook\_ref: "docs/operations/DEPLOYMENT\_GUIDE.md\#identity-1-2-0-rollout"\\n    deprecations:

      introduced:

        \- id: "DEP-002"

          summary: "Legacy token introspection endpoint /v1/tokens/introspectLegacy marked as deprecated."

          details\_ref: "docs/SPECIFICATION.md\#deprecations-identity-1-2-0"

      removed:

        \- id: "DEP-001"

          summary: "Legacy password reset endpoint /v1/password/resetLegacy removed as previously announced."

          details\_ref: "docs/SPECIFICATION.md\#deprecations-identity-1-1-0"\\n    axioms\_scope:

      enforced\_axioms:

        \- "A01"

        \- "A02"

        \- "A03"

        \- "A04"

        \- "A05"

        \- "A06"

        \- "A07"

        \- "A08"

        \- "A09"

        \- "A10"

        \- "A11"

        \- "A12"

        \- "A13"

        \- "A14"

        \- "A15"

        \- "A16"

        \- "A17"

        \- "A18"

        \- "A19"

        \- "A20"

        \- "A21"

        \- "A22"

        \- "A23"

        \- "A24"

        \- "A25"

        \- "A26"

        \- "A27"

        \- "A28"

        \- "A29"

        \- "A30"

        \- "A31"

      relaxed\_axioms: \[\]

      notes: "All axioms A1–A31 are now actively enforced for the Identity Cell. CTK runs as part of ci\_minimal, ci\_full and pre\_release suites, and conformance reports are generated for every build and release."\\n

---

# **2\. knowledge/definitions/cell/dependencies.yaml** {#2.-knowledge/definitions/cell/dependencies.yaml}

## **2.1 Purpose** {#2.1-purpose}

dependencies.yaml declares the **logical dependencies** of the Cell:

* Other **Cells**.

* **External systems** (IdPs, payment gateways, 3rd party APIs).

* **Infrastructure resources** (datastores, queues, caches, secrets).

* **Build-time** dependencies at a **logical level** (not SBOM-level packages).

It is used by CTK and governance to:

* Validate **A5 (acyclic dependencies)** and **A6 (consistency contracts)**.

* Check that every dependency:

  * Has a corresponding **contract** (RPC/events/policy).

  * Matches what is referenced in manifest.architectural\_profile.boundaries.

* Feed SBOM and risk analysis: “What does this Cell depend on logically, and how bad is it if it fails?”

We explicitly **do not** list every Composer/NPM package here; that’s SBOM territory (evidence/security/sbom.spdx.json). Here we stay at the **system interaction level**.

## **2.2 Schema / structure (conceptual)** {#2.2-schema-/-structure-(conceptual)}

api\_version: string

runtime: object

build\_time: object\\nruntime

Logical dependencies needed at **runtime**:

runtime:

  cells:

    \- id: string

      required: boolean

      relation: string

      contracts:

        rpc:

          provides: \[string\]  \# local contracts we provide as seen by this dependency

          consumes: \[string\]  \# contracts we consume from that dependency

        events:

          publishes: \[string\] \# topics we publish that they consume

          subscribes: \[string\]\# topics we subscribe from them

      failure\_impact: string

      notes: string\\n  external\_systems:

    \- name: string

      type: string

      required: boolean

      relation: string

      contracts:

        rpc: \[string\]

        events: \[string\]

      failure\_impact: string

      data\_classification\_impact: string

      notes: string\\n  infrastructure:

    datastores:

      \- id: string

        engine: string

        multi\_tenant\_model: string

        critical: boolean

        relation: string

        failure\_impact: string

        notes: string

    messaging:

      \- id: string

        technology: string

        purpose: string

        critical: boolean

        failure\_impact: string

        notes: string

    caches:

      \- id: string

        technology: string

        purpose: string

        critical: boolean

        failure\_impact: string

        notes: string

    secrets:

      \- id: string

        purpose: string

        managed\_by: string

        rotation\_policy: string

        critical: boolean

        notes: string\\nbuild\_time

Logical dependencies required at **build time** (not full SBOM):

build\_time:

  cells:

    \- id: string

      relation: string

      reason: string

  external\_tools:

    \- name: string

      version\_constraint: string

      purpose: string

  codegen:

    \- name: string

      input\_contracts: \[string\]

      output\_artifacts: \[string\]

      notes: string\\nThis allows you to say things like “we need Billing’s OpenAPI at build time to generate client stubs”.

---

## **2.3 Full example: knowledge/definitions/cell/dependencies.yaml (Identity Cell)** {#2.3-full-example:-knowledge/definitions/cell/dependencies.yaml-(identity-cell)}

api\_version: "axioms.erparom.dev/cell-dependencies.v1alpha1"\\nruntime:

  cells:

    \- id: "notifications"

      required: false

      relation: "The Identity Cell publishes identity lifecycle events consumed by the Notifications Cell."

      contracts:

        rpc:

          provides:

            \- "definitions/contracts/rpc/openapi.yaml\#IdentityPublicAPI"

          consumes: \[\]

        events:

          publishes:

            \- "definitions/contracts/events/user\_registered.asyncapi.yaml"

            \- "definitions/contracts/events/user\_password\_changed.asyncapi.yaml"

          subscribes: \[\]

      failure\_impact: "Email and push notifications for identity events are degraded or disabled; core authentication and authorization continue to function."

      notes: "This dependency is non-critical for authentication; failure should result in graceful degradation (A28) but not in login failures."\\n    \- id: "billing"

      required: false

      relation: "The Identity Cell consumes billing events to enforce access to certain identity features that depend on subscription status."

      contracts:

        rpc:

          provides:

            \- "definitions/contracts/rpc/openapi.yaml\#IdentityAdminAPI"

          consumes:

            \- "../billing/knowledge/definitions/contracts/rpc/openapi.yaml\#BillingAPI"

        events:

          publishes:

            \- "definitions/contracts/events/user\_registered.asyncapi.yaml"

          subscribes:

            \- "../billing/knowledge/definitions/contracts/events/payment\_completed.asyncapi.yaml"

      failure\_impact: "When the Billing Cell is unavailable, identity-related features that depend on billing state may return temporary errors or degraded responses. Authentication itself remains available."

      notes: "Policies must handle the absence of up-to-date billing information without blocking core authentication (A22, A28)."\\n  external\_systems:

    \- name: "ExternalIdP\_AzureAD"

      type: "idp"

      required: false

      relation: "Used for federated login and SSO for tenants that configure Azure AD as their identity provider."

      contracts:

        rpc:

          \- "definitions/contracts/rpc/openapi.yaml\#external-idp-azuread"

        events: \[\]

      failure\_impact: "Federated login via Azure AD becomes unavailable for affected tenants; local credential login remains functional."

      data\_classification\_impact: "Exchange of PII with an external IdP; outage does not leak data but affects login availability."

      notes: "The Identity Cell must fail gracefully and provide clear error messaging when the external IdP is unavailable."\\n    \- name: "ExternalIdP\_Google"

      type: "idp"

      required: false

      relation: "Used for federated login and SSO via Google accounts."

      contracts:

        rpc:

          \- "definitions/contracts/rpc/openapi.yaml\#external-idp-google"

        events: \[\]

      failure\_impact: "Federated login via Google becomes unavailable; local credential login remains functional."

      data\_classification\_impact: "Exchange of PII with external IdP; must comply with GDPR and other relevant regulations."

      notes: "Similar failure handling requirements as Azure AD; no impact on local authentication."\\n  infrastructure:

    datastores:

      \- id: "identity\_db"

        engine: "postgresql"

        multi\_tenant\_model: "pooled"

        critical: true

        relation: "Primary datastore for users, credentials, tokens and roles."

        failure\_impact: "Complete outage of authentication and identity management; treated as a critical incident."

        notes: "This datastore is shared across tenants with strict row-level isolation based on tenant\_id."\\n    messaging:

      \- id: "identity\_events\_exchange"

        technology: "rabbitmq"

        purpose: "Broadcast identity lifecycle events to other Cells such as Notifications and Analytics."

        critical: false

        failure\_impact: "Events may be dropped or delayed; core authentication remains functional. Failure should trigger degraded mode and warnings."

        notes: "The Cell should queue or buffer events opportunistically but not block login flows on messaging failures."\\n    caches:

      \- id: "identity\_token\_cache"

        technology: "redis"

        purpose: "Cache token introspection results, session state and rate-limit counters."

        critical: true

        failure\_impact: "Increased latency and load on the primary datastore; under heavy load, this may contribute to partial degradation of authentication performance."

        notes: "Fallback behavior and timeouts must be well-defined (A09, A10, A22)."\\n    secrets:

      \- id: "identity\_encryption\_keys"

        purpose: "Encrypt and sign tokens, credentials and sensitive identity attributes."

        managed\_by: "secrets-manager"

        rotation\_policy: "90-days-automatic-rotation"

        critical: true

        notes: "Loss or corruption of these secrets can invalidate tokens and prevent decryption of stored credentials; rotation procedures must be tested (A23, A24)."\\nbuild\_time:

  cells:

    \- id: "billing"

      relation: "OpenAPI definition for billing is used to generate client stubs for internal RPC calls."

      reason: "Avoid manual client implementations and ensure alignment with billing contracts."\\n  external\_tools:

    \- name: "openapi-generator"

      version\_constraint: "^7.0.0"

      purpose: "Generate RPC client code for consuming external Cell and third-party APIs based on OpenAPI specifications."\\n    \- name: "opa"

      version\_constraint: "^1.0.0"

      purpose: "Validate Rego policy modules and run policy unit tests during CI."\\n  codegen:

    \- name: "identity-client-stubs"

      input\_contracts:

        \- "../billing/knowledge/definitions/contracts/rpc/openapi.yaml"

      output\_artifacts:

        \- "src/Identity/Infrastructure/Client/BillingClient.php"

      notes: "Regenerated whenever the Billing RPC contract changes; changes must respect A12–A15."\\n

---

**Summary:**

* versions.yaml \= **release history**: versions, dates, contract compatibility, migrations, deprecations, axiom scope per version.

* dependencies.yaml \= **logical dependency graph**: Cells, external systems, infra, and build-time logical dependencies.

Both are now fully specified and have extended, realistic examples that fit the Identity Cell and the rest of your Knowledge Plane canon.

Yeah, good catch.  
 You’re right to be suspicious: the way I shaped versions.yaml last turn **bleeds concerns from manifest.yaml into it** and that’s a design smell.

Let me answer your two questions very explicitly, then I’ll give you a **clean, corrected spec** and example.

---

## **1\. Why are we repeating so much from manifest.yaml in versions.yaml?** {#1.-why-are-we-repeating-so-much-from-manifest.yaml-in-versions.yaml?}

Short answer: **we shouldn’t**. That’s on me.

Conceptually:

* manifest.yaml is the **Knowledge Plane entrypoint and CTK wiring**:

  * Where things live (knowledge\_paths).

  * How A1–A31 are mapped to fitness definitions and evidence.

  * Which suites gate which pipelines.

  * Current architectural profile, boundaries, communication, etc.

* versions.yaml should be **pure release history**:

  * What versions exist for this Cell.

  * When they shipped.

  * Whether they included **breaking vs backward-compatible** contract changes.

  * Whether they required migrations or introduced/removed deprecations.

Anything beyond “this is the historical evolution of the Cell” is **cross-plane coupling** and invites drift.

So:

* Repeating things like axioms enforcement, gating, or CTK semantics in versions.yaml is unnecessary and creates two sources of truth.

* The **only overlap that makes sense** is current\_version (in versions.yaml) and metadata.version (in manifest.yaml): CTK can cross-check them for consistency.

Everything else about Axioms, suites, severity, evidence mapping should stay **only** in:

* manifest.yaml and

* definitions/fitness/axioms/\*.yaml \+ evidence/\*.

---

## **2\. What has axioms\_scope.enforced\_axioms to do with versioning?** {#2.-what-has-axioms_scope.enforced_axioms-to-do-with-versioning?}

In the design I gave you: honestly, **too much**.

The original intent I had in mind was:

“Some Cells may gradually adopt the AXIOMS set; per version you could record which Axioms are fully enforced and which are ‘in progress’.”

That’s **governance** / “maturity” metadata, not intrinsic **versioning**.

The problems:

1. It **duplicates** what’s already knowable from CTK runs:

   * If an Axiom is being enforced, it will have fitness definitions \+ evidence.

   * CTK conformance reports already say “this Axiom is enforced and passes/fails”.

2. It creates **another place where you must remember to update the Axioms list** when:

   * You start enforcing a new Axiom,

   * You tighten enforcement rules,

   * You change gating.

3. It couples versions.yaml to **Axioms semantics**, when it should be coupled only to:

   * Semantic versioning,

   * Contract compatibility,

   * Migrations / deprecations.

Conclusion:

axioms\_scope **does not belong** in versions.yaml.  
 It should be **removed**, and any “which Axioms are enforced” information should come from:

* manifest.yaml (enforcement profile \+ gating), and

* evidence/conformance/\* (actual results).

---

## **3\. Corrected spec for versions.yaml (no duplication, no Axioms here)** {#3.-corrected-spec-for-versions.yaml-(no-duplication,-no-axioms-here)}

Let’s redefine knowledge/definitions/cell/versions.yaml so it is **lean and single-purpose**.

### **3.1 Purpose (clean)**

* Canonical **release history** of the Cell.

* CTK uses it to:

  * Check current\_version vs manifest.metadata.version.

  * Map **conformance history reports** under evidence/conformance/history/ to Cell versions.

  * Understand whether a release **changed contracts** in a backward-compatible or breaking way.

  * Know whether a release **requires migrations** and references the appropriate runbook.

No Axioms, no CTK gating here.

### **3.2 Revised structure**

api\_version: string

current\_version: string

versions:

  \- version: string

    release\_date: string         \# YYYY-MM-DD

    release\_type: string         \# "ga" | "rc" | "beta" | "alpha" | "hotfix"

    lifecycle\_stage: string      \# "production" | "staging" | "deprecated" | "retired"

    summary: string\\n    git:

      tag: string

      commit: string\\n    compatibility:

      rpc:

        status: string           \# "backward-compatible" | "breaking" | "none"

        notes: string

      events:

        status: string

        notes: string

      policy:

        status: string

        notes: string\\n    migrations:

      required: boolean

      description: string

      runbook\_ref: string        \# link into docs/operations/\*\\n    deprecations:

      introduced:

        \- id: string

          summary: string

          details\_ref: string    \# usually docs/SPECIFICATION.md section

      removed:

        \- id: string

          summary: string

          details\_ref: string\\n    links:

      release\_notes: string      \# e.g. docs/SPECIFICATION.md\#release-1-2-0

      conformance\_report: string \# e.g. evidence/conformance/history/identity-1.2.0.json\\nObservations:

* “Which Axioms are enforced” is **gone**.

* We keep only what’s inherently tied to “this is version X of this Cell”.

---

## **4\. Corrected example: versions.yaml for the Identity Cell** {#4.-corrected-example:-versions.yaml-for-the-identity-cell}

Here’s the same Identity Cell, **without the bad axioms\_scope stuff**, and with much less overlap with manifest.yaml.

api\_version: "axioms.erparom.dev/cell-versions.v1alpha1"\\ncurrent\_version: "1.2.0"\\nversions:

  \- version: "1.0.0"

    release\_date: "2025-10-15"

    release\_type: "ga"

    lifecycle\_stage: "deprecated"

    summary: "Initial GA release of the Identity Cell with password-based authentication, basic token issuance and identity lifecycle events."\\n    git:

      tag: "identity-1.0.0"

      commit: "a1b2c3d4e5f60123456789abcdef0123456789a"\\n    compatibility:

      rpc:

        status: "backward-compatible"

        notes: "First public version; initial RPC surface defined."

      events:

        status: "backward-compatible"

        notes: "Introduced UserRegistered and UserPasswordChanged events."

      policy:

        status: "backward-compatible"

        notes: "Initial authorization Rego modules; no previous policy constraints."\\n    migrations:

      required: true

      description: "Initial database schema creation for users, credentials, tokens and roles."

      runbook\_ref: "docs/operations/DEPLOYMENT\_GUIDE.md\#identity-initial-schema-migration"\\n    deprecations:

      introduced: \[\]

      removed: \[\]\\n    links:

      release\_notes: "docs/SPECIFICATION.md\#release-1-0-0"

      conformance\_report: "evidence/conformance/history/identity-1.0.0.json"\\n  \- version: "1.1.0"

    release\_date: "2025-11-20"

    release\_type: "ga"

    lifecycle\_stage: "deprecated"

    summary: "Adds multi-factor authentication (MFA) flows and associated events."\\n    git:

      tag: "identity-1.1.0"

      commit: "b2c3d4e5f60123456789abcdef0123456789ab1c"\\n    compatibility:

      rpc:

        status: "backward-compatible"

        notes: "New MFA endpoints added; existing endpoints unchanged."

      events:

        status: "backward-compatible"

        notes: "Added MfaEnrolled and MfaVerified events."

      policy:

        status: "backward-compatible"

        notes: "Extended authorization rules to handle MFA permissions."\\n    migrations:

      required: true

      description: "Schema changes to support MFA enrollment, recovery codes and verification metadata."

      runbook\_ref: "docs/operations/DEPLOYMENT\_GUIDE.md\#identity-mfa-schema-migration"\\n    deprecations:

      introduced:

        \- id: "DEP-001"

          summary: "Deprecated legacy password reset endpoint /v1/password/resetLegacy."

          details\_ref: "docs/SPECIFICATION.md\#deprecations-identity-1-1-0"

      removed: \[\]\\n    links:

      release\_notes: "docs/SPECIFICATION.md\#release-1-1-0"

      conformance\_report: "evidence/conformance/history/identity-1.1.0.json"\\n  \- version: "1.2.0"

    release\_date: "2025-12-05"

    release\_type: "ga"

    lifecycle\_stage: "production"

    summary: "Introduces contract version negotiation and improved failure isolation, with CTK governance fully integrated."\\n    git:

      tag: "identity-1.2.0"

      commit: "c3d4e5f60123456789abcdef0123456789ab1cd2"\\n    compatibility:

      rpc:

        status: "backward-compatible"

        notes: "Header-based version negotiation added; existing version remains supported."

      events:

        status: "backward-compatible"

        notes: "Extended event schemas with optional fields only; tolerant readers ensure compatibility."

      policy:

        status: "backward-compatible"

        notes: "Policy modules extended with new rules; no breaking changes in inputs or outputs."\\n    migrations:

      required: false

      description: "No schema migrations required; changes limited to contract evolution and behavior."

      runbook\_ref: "docs/operations/DEPLOYMENT\_GUIDE.md\#identity-1-2-0-rollout"\\n    deprecations:

      introduced:

        \- id: "DEP-002"

          summary: "Legacy token introspection endpoint /v1/tokens/introspectLegacy marked as deprecated."

          details\_ref: "docs/SPECIFICATION.md\#deprecations-identity-1-2-0"

      removed:

        \- id: "DEP-001"

          summary: "Legacy password reset endpoint /v1/password/resetLegacy removed as previously announced."

          details\_ref: "docs/SPECIFICATION.md\#deprecations-identity-1-1-0"\\n    links:

      release\_notes: "docs/SPECIFICATION.md\#release-1-2-0"

      conformance\_report: "evidence/conformance/history/identity-1.2.0.json"\\n

---

### **TL;DR**

* You’re right: I was mixing **governance/axioms** into **version history**.

* After correction:

  * manifest.yaml \= CTK wiring, Axioms, suites, knowledge\_paths, architectural profile.

  * versions.yaml \= **only** Cell release history, compatibility, migrations, deprecations, and references to release notes \+ conformance reports.

* axioms\_scope has **nothing intrinsic to do with versioning** and should be dropped from versions.yaml.

If you want, we can now **revisit manifest.yaml and versions.yaml together** and write a short “separation of concerns” subsection for the AXIOMS spec so this split is codified and not at the mercy of future confusion.\\nAlright, let’s go through this like an architect doing a code review, not like an LLM spewing fluff.

I’ll answer exactly what you asked:

1. Do they make sense?

2. Are we repeating stuff unnecessarily?

3. Is anything bloated?

4. Does each file look like a full, coherent *specimen* (no weird omissions)?

---

## **1\. cells/cell\_tpl/knowledge/manifest.yaml** {#1.-cells/cell_tpl/knowledge/manifest.yaml}

### **What this file is doing**

* **Correct role**: it’s acting as the **Knowledge Plane entrypoint \+ CTK wiring**, as we agreed:

  * architectural\_profile (planes, boundaries, communication).

  * axioms → mapping A01–A31 → fitness definition \+ expected evidence \+ suites \+ severity.

  * knowledge\_paths → how CTK finds other files.

  * metadata → identity snapshot for CTK/reporting.

  * tooling → CTK \+ generators info.

From a *concern* perspective, this is solid.

### **Redundancy / bloat**

The **only real redundancy** is:

manifest.metadata vs definitions/cell/cell.yaml.metadata (and other sections in cell.yaml):

 metadata:

  bounded\_context: "UserAuthenticationAndAuthorization"

  cell\_id: "identity"

  cell\_name: "Identity Cell"

  criticality\_tier: "tier-0"

  description: "The Identity Cell implements core authentication..."

  domain: "IdentityAndAccessManagement"

  lifecycle\_stage: "production"

  owner\_contacts:

    email: "identity-team@example.com"

    slack: "platform-identity"

  owner\_team: "platform-identity"

  supported\_environments:

    \- "dev"

    \- "staging"

    \- "prod"

  tags:

    \- "identity"

    \- "security"

    \- "multi-tenant"

    \- "axioms-compliant"

  version: "1.2.0"\\nAnd in cell.yaml you have essentially the same identity.

👉 This is not *useless* (CTK wants metadata quickly here), but it **is double-maintained**. Two options:

1. **Keep as-is but codify the contract**:

   * **Source of truth** for domain identity is cell.yaml.

   * manifest.metadata is a **mirror subset** for CTK/reporting.

   * CTK validates:

     * manifest.metadata.cell\_id \== cell.yaml.metadata.cell\_id

     * manifest.metadata.version \== versions.current\_version

     * optionally domain, bounded\_context, etc.

2. **Trim manifest.metadata** to *only* what's strictly needed by CTK:

   * cell\_id

   * version

   * criticality\_tier

   * lifecycle\_stage

   * maybe owner\_team

Right now, it is slightly on the **bloated** side because it mirrors almost everything from cell.yaml. It’s not wrong, but if your goal is **zero redundant identity fields**, you’d trim manifest.metadata to the minimal CTK subset.

Everything else in this file looks **purposeful**:

* architectural\_profile is not duplicated elsewhere in this same shape.

* communication is the CTK-facing view of RPC/events/policy/observability — dependencies.yaml adds more detail, not the same thing.

* axioms.implementations are verbose, but that’s by design: this is the **canonical mapping from Axx → fitness & evidence**.

* knowledge\_paths is exactly what CTK needs. No obvious bloat there.

So: **only notable redundancy** is the identity metadata vs cell.yaml.

Everything else in manifest.yaml is doing a distinct job.

---

## **2\. cells/cell\_tpl/knowledge/definitions/cell/cell.yaml** {#2.-cells/cell_tpl/knowledge/definitions/cell/cell.yaml}

### **What it’s doing**

You’re using this exactly as we designed:

* classification → PII, sensitivity, regulatory tags.

* domain → bounded context, primary entities, primary use cases, invariants.

* metadata → cell identity (id, domain, description, owner, etc).

This is the **domain & identity spec**, independent of CTK wiring.

### **Issues / omissions**

The snippet you pasted is **cut** here:

metadata:

  cell\_id: "identity"

  criticality\_tier: "tier-0"

  description: "The Identity Cell implements authentication, authorization and identity lifecycle services across tenants, enforcing strong security and observability baselines."

  domain: "IdentityAndAccessManagement"

  name: "Identity Cell"

  owner\_contacts:

    ema\\nSo, locally:

* This YAML, as pasted, is **syntactically broken** (the ema fragment).

* And it’s missing the rest of what we had designed (if you intend to use the full spec we previously agreed on):

  * metadata.owner\_contacts.email \+ .slack

  * metadata.repo (if you want that)

  * multi\_tenancy

  * planes

  * responsibilities

  * surfaces

If in your **real file** all of that is below and you only truncated for copy/paste, then the spec is fine and **not redundant** with manifest:

* cell.yaml → domain semantics and model.

* manifest.yaml → knowledge-plane wiring \+ CTK view.

BUT: if your actual cell.yaml literally ends where the paste ends, then:

* It’s **incomplete** relative to the spec we designed.

* And it’s not yet a “full file specification sample without omissions”.

So the only concrete feedback on redundancy:

* The only overlap that really matters is **metadata identity** (same as above).

* classification, domain, invariants, etc. are **not** duplicated elsewhere – good.

---

## **3\. cells/cell\_tpl/knowledge/definitions/cell/dependencies.yaml** {#3.-cells/cell_tpl/knowledge/definitions/cell/dependencies.yaml}

### **What it’s doing**

This is very clean:

* runtime.cells → logical upstream/downstream Cells \+ contracts \+ failure impact.

* runtime.external\_systems → IdPs \+ contracts \+ impact \+ data classification impact.

* runtime.infrastructure → datastores, messaging, caches, secrets.

* build\_time → build-time dependencies, external tools, codegen inputs/outputs.

This is **exactly** what we wanted: a logical dependency graph, not SBOM noise.

### **Redundancy vs manifest**

The **only overlap** is conceptual:

* manifest.architectural\_profile.boundaries lists:

  * downstream\_cells (notifications, billing)

  * external\_systems (AzureAD, Google)

* dependencies.yaml.runtime.cells and .external\_systems also list:

  * notifications, billing, Azure, Google.

But:

* In manifest, those are part of the **architectural picture** (high-level topology).

* In dependencies.yaml, they are **enriched with contracts, failure\_impact, infra, etc.**

The string relation texts are similar, but here that’s not useless—they’re the **human-facing description** for the dependency, in the file where you also attach contracts, failure impact, etc.

I wouldn’t call this bloat. It’s **two views**:

* “Architecture map” → manifest.

* “Dependency details and risk” → dependencies.

If you want to be ultra-dry:

* You could shorten manifest.boundaries.\*.relation to something minimal and keep the narrative text only in dependencies.yaml.

* But as it stands, it’s not insane duplication.

So: **dependencies.yaml looks good, not bloated**, and its overlap with manifest is intentional and useful for cross-checking.

---

## **4\. cells/cell\_tpl/knowledge/definitions/cell/versions.yaml** {#4.-cells/cell_tpl/knowledge/definitions/cell/versions.yaml}

This one is almost perfect given our last correction.

* Purpose: **pure release history**.

* No Axioms, no CTK gating, no knowledge\_paths. ✅

* Good fields:

  * current\_version

  * versions\[\] with release\_date, release\_type, lifecycle\_stage, summary

  * git info

  * compatibility (rpc/events/policy)

  * migrations (+ runbook\_ref)

  * deprecations (introduced/removed)

  * links → release notes and conformance report.

Redundancy vs manifest:

* Only intentional link is:

  * current\_version: "1.2.0"

  * manifest.metadata.version: "1.2.0"

This is correct and **not** bloat – it’s the exact cross-check CTK should do.

Everything else is version-history-only and not duplicated elsewhere. This file is **lean and complete**.

---

## **5\. Overall verdict** {#5.-overall-verdict}

* **manifest.yaml**

  * ✅ Correct role.

  * ✅ Axiom mapping and CTK wiring well-expressed.

  * ⚠️ **Redundancy**: identity metadata is mirrored from cell.yaml.

    * If you’re okay with that, codify “cell.yaml is canonical; manifest mirrors subset and CTK enforces equality”.

    * If you want zero redundancy, trim manifest.metadata to minimal CTK-facing subset.

* **cell.yaml**

  * ✅ Conceptually correct: domain identity, classification, invariants, etc.

  * ⚠️ **As pasted, it’s truncated and syntactically broken** (owner\_contacts: ema).

    * If the real file is complete with the rest of the spec (multi\_tenancy, planes, responsibilities, surfaces), you’re good.

    * If not, you need to finish it to call it “full sample without omissions”.

* **dependencies.yaml**

  * ✅ Very good separation: runtime vs build\_time, logical dependencies, impact, infra.

  * ✅ Overlap with manifest is purposeful and not useless.

* **versions.yaml**

  * ✅ Clean, scoped to version history only.

  * ✅ No leftover Axioms/governance junk.

  * ✅ Cross-check link to manifest via version only.

If you want, next step could be:

* I give you a **tiny patch** version of manifest.yaml.metadata and cell.yaml.metadata showing a “minimal CTK subset” vs “canonical identity” split, so we encode the DRY principle explicitly and avoid future drift.

Got it. Let’s do **surgical edits only**.

I’ll only touch what actually needs refactor to avoid repetition / bloat:

* manifest.yaml → shrink metadata so it only carries CTK/operational stuff (no domain description, no owners).

* cell.yaml → fix the broken metadata block and make it the *only* place with domain/owner details.

* dependencies.yaml → **no change**.

* versions.yaml → **no change**.

---

## **1\. cells/cell\_tpl/knowledge/manifest.yaml** {#1.-cells/cell_tpl/knowledge/manifest.yaml-1}

### **Change: shrink metadata to CTK-focused subset**

**What to do**

In cells/cell\_tpl/knowledge/manifest.yaml,  
 **find the entire metadata: block**:

metadata:

  bounded\_context: "UserAuthenticationAndAuthorization"

  cell\_id: "identity"

  cell\_name: "Identity Cell"

  criticality\_tier: "tier-0"

  description: "The Identity Cell implements core authentication, authorization and identity lifecycle services across tenants, enforcing strong security and observability baselines."

  domain: "IdentityAndAccessManagement"

  lifecycle\_stage: "production"

  owner\_contacts:

    email: "identity-team@example.com"

    slack: "platform-identity"

  owner\_team: "platform-identity"

  supported\_environments:

    \- "dev"

    \- "staging"

    \- "prod"

  tags:

    \- "identity"

    \- "security"

    \- "multi-tenant"

    \- "axioms-compliant"

  version: "1.2.0"\\n…and **replace it completely** with this minimal CTK/ops view:

metadata:

  cell\_id: "identity"

  cell\_name: "Identity Cell"

  version: "1.2.0"

  lifecycle\_stage: "production"

  criticality\_tier: "tier-0"

  supported\_environments:

    \- "dev"

    \- "staging"

    \- "prod"

  tags:

    \- "identity"

    \- "security"

    \- "multi-tenant"

    \- "axioms-compliant"\\n**Effect**

* All **domain semantics** (description, bounded\_context, domain, owner\_contacts, owner\_team) now live **only** in cell.yaml.

* manifest.yaml keeps only what CTK needs for reporting and gating.

No other section in manifest.yaml needs to change for your constraints.

---

## **2\. cells/cell\_tpl/knowledge/definitions/cell/cell.yaml** {#2.-cells/cell_tpl/knowledge/definitions/cell/cell.yaml-1}

Right now this file is truncated / broken at:

metadata:

  cell\_id: "identity"

  criticality\_tier: "tier-0"

  description: "The Identity Cell implements authentication, authorization and identity lifecycle services across tenants, enforcing strong security and observability baselines."

  domain: "IdentityAndAccessManagement"

  name: "Identity Cell"

  owner\_contacts:

    ema\\nWe’ll:

* **Fix syntax**.

* Make this the **only place** with domain description and ownership info.

* Drop criticality\_tier here (it now lives only in manifest.yaml to avoid duplication).

**What to do**

In cells/cell\_tpl/knowledge/definitions/cell/cell.yaml,  
 **find the metadata: block starting at**:

metadata:

  cell\_id: "identity"

  criticality\_tier: "tier-0"

  description: "The Identity Cell implements authentication, authorization and identity lifecycle services across tenants, enforcing strong security and observability baselines."

  domain: "IdentityAndAccessManagement"

  name: "Identity Cell"

  owner\_contacts:

    ema\\n…and **replace that entire block** with:

metadata:

  cell\_id: "identity"

  name: "Identity Cell"

  description: "The Identity Cell implements authentication, authorization and identity lifecycle services across tenants, enforcing strong security and observability baselines."

  domain: "IdentityAndAccessManagement"

  owner\_team: "platform-identity"

  owner\_contacts:

    email: "identity-team@example.com"

    slack: "platform-identity"\\n**Effect**

* cell.yaml now cleanly owns:

  * Domain label: "IdentityAndAccessManagement".

  * Human description of the Cell.

  * Ownership details (owner\_team, owner\_contacts).

* criticality\_tier is **only** in manifest.yaml → one source of truth.

* No other sections in cell.yaml are duplicated elsewhere (classification, domain entities/use-cases/invariants are unique to this file).

---

## **3\. cells/cell\_tpl/knowledge/definitions/cell/dependencies.yaml** {#3.-cells/cell_tpl/knowledge/definitions/cell/dependencies.yaml-1}

**No changes needed.**

* It contains **only dependency graph & risk/impact info**, not present in other files in this shape.

* Overlap with manifest.boundaries is intentional (two different views: topo vs dependency detail), not dumb repetition.

---

## **4\. cells/cell\_tpl/knowledge/definitions/cell/versions.yaml** {#4.-cells/cell_tpl/knowledge/definitions/cell/versions.yaml-1}

**No changes needed.**

* It is strictly **release history** \+ compatibility \+ migrations \+ deprecations \+ links.

* It only shares the **version string** with manifest.metadata.version, which is necessary for cross-checking.

* No Axioms, no CTK wiring: no overlap with manifest.yaml or cell.yaml beyond the version id.

---

If you apply exactly those two replacements, you’ll have:

* manifest.yaml \= CTK/ops wiring \+ Axioms \+ paths.

* cell.yaml \= domain \+ identity \+ ownership.

* dependencies.yaml \= runtime/build-time dependency graph.

* versions.yaml \= pure version history.

With only **minimal, necessary bridging fields** shared (e.g., cell\_id, version).

Perfect, let’s define these two cleanly and tightly.

I’ll do:

* A **short spec** for each file (what it’s for, main sections).

* A **full example file** for each (policy\_manifest.yaml and regulatory\_map.yaml) you can drop directly into cells/cell\_tpl/knowledge/definitions/compliance/.

No other files need changes.

---

## **1\. policy\_manifest.yaml** {#1.-policy_manifest.yaml}

### **1.1 Purpose**

cells/cell\_tpl/knowledge/definitions/compliance/policy\_manifest.yaml:

* Declares **which policies exist for this Cell**, in a **machine-readable** way.

* Connects each policy to:

  * Its **sources** (Rego modules, YAML configs, etc.).

  * Its **scope** (what it guards: RPC surfaces, events, resources).

  * Its **enforcement mode** (enforce / dry-run / disabled).

  * Its **decision I/O contract references** (usually into POLICY\_CONTRACT.md).

  * Basic **audit & lifecycle data**.

  * Optional **links to regulations** (by id, which will be detailed in regulatory\_map.yaml).

It does **not** duplicate:

* The full text of the policy (that’s in definitions/contracts/policy/\*).

* The full regulatory breakdown (that’s in regulatory\_map.yaml).

### **1.2 Full example: cells/cell\_tpl/knowledge/definitions/compliance/policy\_manifest.yaml**

api\_version: "axioms.erparom.dev/cell-policy.v1alpha1"\\nmetadata:

  cell\_id: "identity"

  policy\_set\_version: "1.0.0"

  owner\_team: "platform-identity"

  last\_updated: "2025-12-05"

  description: "Canonical manifest of policies enforced by the Identity Cell, including authorization, rate limiting and data retention."\\ndefaults:

  enforcement\_mode: "enforce"       \# "enforce" | "dry-run" | "disabled"

  fail\_behavior: "fail-closed"      \# "fail-closed" | "fail-open"

  audit:

    log\_decisions: true

    include\_input\_snapshot: false\\npolicies:

  \- id: "AUTHZ\_MAIN"

    name: "Primary authorization policy"

    description: "Decides whether a subject (user or workload) is allowed to perform a given operation on a given resource within a tenant."

    category: "authorization"       \# e.g. "authorization" | "rate-limit" | "data-protection" | "retention"

    enforcement\_mode: "enforce"     \# overrides defaults.enforcement\_mode if present

    fail\_behavior: "fail-closed"    \# overrides defaults.fail\_behavior if present\\n    sources:

      \- path: "definitions/contracts/policy/authorization.rego"

        type: "opa-rego"

        entrypoint: "data.identity.authz.allow"\\n    scope:

      rpc:

        surfaces:

          \- "IdentityPublicAPI"

          \- "IdentityAdminAPI"

        operations:

          \- "login"

          \- "logout"

          \- "refreshToken"

          \- "createUser"

          \- "updateUser"

          \- "disableUser"

          \- "assignRole"

          \- "revokeRole"

      events:

        topics:

          \- "identity.user.\*"

        direction:

          \- "publish"

      data:

        resources:

          \- "User"

          \- "Role"

          \- "Token"

        actions:

          \- "read"

          \- "write"

          \- "delete"

        tenant\_scoped: true\\n    decision\_io:

      input\_schema\_ref: "definitions/contracts/policy/POLICY\_CONTRACT.md\#authz-input"

      output\_schema\_ref: "definitions/contracts/policy/POLICY\_CONTRACT.md\#authz-output"\\n    audit:

      log\_event\_code: "IDENTITY\_AUTHZ\_DECISION"

      severity\_on\_deny: "warning"

      include\_input\_snapshot: false\\n    lifecycle:

      status: "active"              \# "active" | "deprecated" | "experimental"

      introduced\_in\_version: "1.0.0"

      deprecated\_in\_version: null

      supersedes: \[\]

      superseded\_by: \[\]\\n    related\_regulations:

      \- "GDPR"

      \- "SOC2-CC6.6"\\n  \- id: "RATE\_LIMIT\_MAIN"

    name: "Primary rate limiting policy"

    description: "Applies rate limits and quotas to RPC operations to protect the Identity Cell and downstream systems."

    category: "rate-limit"

    enforcement\_mode: "enforce"

    fail\_behavior: "fail-open"      \# rate limiting failures should not block all traffic; use degraded behavior\\n    sources:

      \- path: "definitions/contracts/policy/rate\_limits.yaml"

        type: "config-yaml"

        entrypoint: "global"\\n    scope:

      rpc:

        surfaces:

          \- "IdentityPublicAPI"

        operations:

          \- "login"

          \- "refreshToken"

      events:

        topics: \[\]

        direction: \[\]

      data:

        resources: \[\]

        actions: \[\]

        tenant\_scoped: true\\n    decision\_io:

      input\_schema\_ref: "definitions/contracts/policy/POLICY\_CONTRACT.md\#rate-limit-input"

      output\_schema\_ref: "definitions/contracts/policy/POLICY\_CONTRACT.md\#rate-limit-output"\\n    audit:

      log\_decisions: true

      log\_event\_code: "IDENTITY\_RATE\_LIMIT\_DECISION"

      severity\_on\_deny: "info"

      include\_input\_snapshot: false\\n    lifecycle:

      status: "active"

      introduced\_in\_version: "1.1.0"

      deprecated\_in\_version: null

      supersedes: \[\]

      superseded\_by: \[\]\\n    related\_regulations:

      \- "SOC2-CC7.1"\\n  \- id: "DATA\_RETENTION"

    name: "Data retention and deletion policy"

    description: "Defines how long identity-related data is retained and under which conditions it is anonymized or deleted."

    category: "data-protection"

    enforcement\_mode: "enforce"

    fail\_behavior: "fail-closed"\\n    sources:

      \- path: "definitions/contracts/policy/data\_retention.yaml"

        type: "config-yaml"

        entrypoint: "identity"\\n    scope:

      rpc:

        surfaces:

          \- "IdentityAdminAPI"

        operations:

          \- "deleteUser"

          \- "anonymizeUser"

      events:

        topics:

          \- "identity.user.deleted"

          \- "identity.user.anonymized"

        direction:

          \- "publish"

      data:

        resources:

          \- "User"

          \- "AuditLog"

        actions:

          \- "delete"

          \- "anonymize"

        tenant\_scoped: true\\n    decision\_io:

      input\_schema\_ref: "definitions/contracts/policy/POLICY\_CONTRACT.md\#retention-input"

      output\_schema\_ref: "definitions/contracts/policy/POLICY\_CONTRACT.md\#retention-output"\\n    audit:

      log\_event\_code: "IDENTITY\_RETENTION\_DECISION"

      severity\_on\_deny: "error"

      include\_input\_snapshot: true\\n    lifecycle:

      status: "active"

      introduced\_in\_version: "1.2.0"

      deprecated\_in\_version: null

      supersedes: \[\]

      superseded\_by: \[\]\\n    related\_regulations:

      \- "GDPR"

      \- "GDPR-Art.17"

      \- "SOC2-CC8.1"\\nThis is:

* Non-empty.

* No redundant garbage.

* Everything is meaningful in the **policy** context only.

---

## **2\. regulatory\_map.yaml** {#2.-regulatory_map.yaml}

### **2.1 Purpose**

cells/cell\_tpl/knowledge/definitions/compliance/regulatory\_map.yaml:

* Describes **which external regulations/standards** are relevant to this Cell.

* For each regulation:

  * Whether it’s **in-scope**, **out-of-scope**, or **partially applicable**.

  * Which **articles/requirements/criteria** are relevant.

  * Which **policies** and **measures** satisfy them.

  * Where the **evidence** lives (tests, docs, observability samples).

  * Current **compliance status** and risk notes.

It does **not** repeat the policy bodies or technical details—that’s in policy\_manifest.yaml and definitions/contracts/policy.

### **2.2 Full example: cells/cell\_tpl/knowledge/definitions/compliance/regulatory\_map.yaml**

api\_version: "axioms.erparom.dev/cell-regmap.v1alpha1"\\nmetadata:

  cell\_id: "identity"

  owner\_team: "platform-identity"

  last\_reviewed: "2025-12-05"

  notes: "Regulatory applicability and control mapping for the Identity Cell. This map is indicative and must be reviewed regularly with security/compliance teams."\\nregulations:

  \- id: "GDPR"

    name: "General Data Protection Regulation"

    applicability: "in-scope"          \# "in-scope" | "out-of-scope" | "partial"

    scope\_description: "The Identity Cell processes and stores personal data (PII) of EU residents for authentication and authorization purposes."

    data\_subjects:

      \- "EU-resident end users"

      \- "Administrative users with EU residency"\\n    articles:

      \- article: "Art. 5(1)(c)"

        title: "Data minimisation"

        requirement\_summary: "Personal data must be adequate, relevant and limited to what is necessary for the purposes for which they are processed."

        relevance: "high"             \# "high" | "medium" | "low"\\n        controls:

          policies:

            \- "AUTHZ\_MAIN"

            \- "DATA\_RETENTION"

          technical\_measures:

            \- "access\_control"

            \- "role\_based\_access"

            \- "field\_minimisation"

          organizational\_measures:

            \- "access\_review\_quarterly"

            \- "change\_management\_reviews"\\n        evidence:

          fitness\_tests:

            \- "definitions/fitness/axioms/A17\_least\_privilege.yaml"

            \- "definitions/fitness/axioms/A24\_data\_management.yaml"

          documents:

            \- "docs/COMPLIANCE\_OVERVIEW.md\#gdpr-data-minimisation"

          observability\_samples:

            \- "evidence/observability/logs\_sample.json"

          conformance\_reports:

            \- "evidence/conformance/history/identity-1.2.0.json"\\n        status:

          compliance\_level: "partial"  \# "compliant" | "partial" | "non-compliant" | "not-applicable"

          last\_assessed: "2025-12-01"

          risk\_notes: "Data collection is limited but further review is required to ensure all optional attributes are strictly necessary."\\n      \- article: "Art. 17"

        title: "Right to erasure ('right to be forgotten')"

        requirement\_summary: "Data subjects have the right to obtain the erasure of personal data concerning them without undue delay under certain conditions."

        relevance: "high"\\n        controls:

          policies:

            \- "DATA\_RETENTION"

          technical\_measures:

            \- "soft\_delete\_with\_anonymization"

            \- "tenant\_scoped\_deletion"

          organizational\_measures:

            \- "erasure\_request\_process"

            \- "support\_playbooks"\\n        evidence:

          fitness\_tests:

            \- "definitions/fitness/axioms/A24\_data\_management.yaml"

          documents:

            \- "docs/COMPLIANCE\_OVERVIEW.md\#gdpr-right-to-erasure"

            \- "docs/operations/RUNBOOKS.md\#identity-erasure-requests"

          observability\_samples:

            \- "evidence/observability/logs\_sample.json"

          conformance\_reports:

            \- "evidence/conformance/history/identity-1.2.0.json"\\n        status:

          compliance\_level: "partial"

          last\_assessed: "2025-12-01"

          risk\_notes: "Core erasure and anonymization flows exist, but not all integrations consume identity.user.anonymized events consistently."\\n    references:

      official: "https://example.com/gdpr"

      internal: "docs/COMPLIANCE\_OVERVIEW.md\#gdpr"\\n  \- id: "SOC2"

    name: "SOC 2"

    applicability: "partial"

    scope\_description: "The Identity Cell is part of the security boundary for logical access control, logging and monitoring."

    data\_subjects:

      \- "All authenticated users and workloads within the platform"\\n    trust\_services\_criteria:

      \- id: "CC6.6"

        name: "Logical access security"

        requirement\_summary: "Logical access security software, infrastructure and architectures are implemented to support restricted access."

        relevance: "high"\\n        controls:

          policies:

            \- "AUTHZ\_MAIN"

            \- "RATE\_LIMIT\_MAIN"

          technical\_measures:

            \- "strong\_authentication"

            \- "least\_privilege"

            \- "multi\_factor\_authentication"

          organizational\_measures:

            \- "user\_access\_review"

            \- "privileged\_access\_review"\\n        evidence:

          fitness\_tests:

            \- "definitions/fitness/axioms/A16\_policy\_externalization.yaml"

            \- "definitions/fitness/axioms/A17\_least\_privilege.yaml"

          documents:

            \- "docs/COMPLIANCE\_OVERVIEW.md\#soc2-cc6-6"

          observability\_samples:

            \- "evidence/observability/metrics\_snapshot.json"

            \- "evidence/observability/logs\_sample.json"

          conformance\_reports:

            \- "evidence/conformance/history/identity-1.2.0.json"\\n        status:

          compliance\_level: "partial"

          last\_assessed: "2025-12-01"

          risk\_notes: "Authorization policies are externalized and enforced, but formalized periodic reviews for privileged roles need improvement."\\n      \- id: "CC7.2"

        name: "Change management and incident response"

        requirement\_summary: "Changes to infrastructure, data and software are authorized, tested, approved and documented; incidents are logged and handled."

        relevance: "medium"\\n        controls:

          policies:

            \- "AUTHZ\_MAIN"

          technical\_measures:

            \- "auditable\_changes"

            \- "structured\_logging"

          organizational\_measures:

            \- "change\_management\_process"

            \- "incident\_response\_runbooks"\\n        evidence:

          fitness\_tests:

            \- "definitions/fitness/axioms/A27\_change\_management.yaml"

            \- "definitions/fitness/axioms/A23\_recovery\_procedures.yaml"

          documents:

            \- "docs/COMPLIANCE\_OVERVIEW.md\#soc2-cc7-2"

            \- "docs/operations/RUNBOOKS.md\#identity-incident-response"

          observability\_samples:

            \- "evidence/observability/logs\_sample.json"

          conformance\_reports:

            \- "evidence/conformance/history/identity-1.2.0.json"\\n        status:

          compliance\_level: "partial"

          last\_assessed: "2025-12-01"

          risk\_notes: "Change management and incident response processes exist but require formalization and consistent application across all environments."\\n    references:

      official: "https://example.com/soc2"

      internal: "docs/COMPLIANCE\_OVERVIEW.md\#soc2"\\n  \- id: "HIPAA"

    name: "Health Insurance Portability and Accountability Act"

    applicability: "out-of-scope"

    scope\_description: "The Identity Cell does not process protected health information (PHI) or provide services for covered entities under HIPAA."

    data\_subjects: \[\]

    articles: \[\]

    references:

      official: "https://example.com/hipaa"

      internal: "docs/COMPLIANCE\_OVERVIEW.md\#hipaa"\\nThis keeps:

* **Policy IDs** like AUTHZ\_MAIN, RATE\_LIMIT\_MAIN, DATA\_RETENTION coming from policy\_manifest.yaml.

* **Regulation IDs** like GDPR, SOC2, HIPAA local to this map.

* No bloat, no duplication of policy logic.

---

If you want, next we can:

* Add a short “specification paragraph” to AXIOMS for each of these two files (what tools can assume, what invariants must hold), or

* Cross-map regulations to Axioms explicitly (e.g. which Axioms most strongly support GDPR/SOC2 conformance).

Yeah, good catch on the “empty directory” smell.  
 Your rule is solid:

If a directory is *structurally important* but its contents are cell-specific, the template MUST include an example file to guide implementors.

So for:

cells/cell\_tpl/knowledge/definitions/contracts/events/\\nwe’ll add a **single**, rich example file:

cells/cell\_tpl/knowledge/definitions/contracts/events/event.example.asyncapi.yaml\\nIt’s *non-mandatory*, but **normative as a template**.

Below is the *full* spec \+ example for that file.

---

## **1\. File: definitions/contracts/events/event.example.asyncapi.yaml** {#1.-file:-definitions/contracts/events/event.example.asyncapi.yaml}

### **1.1 Purpose**

* Provide a **canonical example** of how event contracts should be described for a Cell using **AsyncAPI**.

* Show:

  * Topic naming conventions (identity.user.registered, identity.user.password.changed).

  * Standard headers (tenant\_id, event\_id, trace\_id, etc.).

  * Payload schemas.

  * Idempotency / correlation hints.

  * How to encode event semantics in a way that supports **A3, A4, A6, A8, A12, A13** (and related axioms).

### **1.2 Expectations / rules**

For the **template Cell**:

* This file is **optional** for runtime, but **mandatory in the template**:

  * Real Cells will replace it with concrete files like:

    * user\_registered.asyncapi.yaml

    * user\_password\_changed.asyncapi.yaml

* CTK is **not required** to parse event.example.asyncapi.yaml; it’s for humans, but it is also **valid AsyncAPI** if someone wants to validate it.

Conventions shown here SHOULD be followed by real event contracts:

* Topic format:  
   cell.domain.entity.action (e.g. identity.user.registered).

* Headers: tenant\_id, event\_id, event\_type, occurred\_at, trace\_id, span\_id, schema\_version.

* Payloads: **JSON Schema** under components/schemas/\*.

* Use x-\* extensions to encode AXIOMS / Cell metadata when useful.

---

## **2\. Full example: event.example.asyncapi.yaml** {#2.-full-example:-event.example.asyncapi.yaml}

You can drop this file exactly as-is into:

cells/cell\_tpl/knowledge/definitions/contracts/events/event.example.asyncapi.yaml\\nasyncapi: "2.6.0"\\ninfo:

  title: "Identity Cell Events (Example)"

  version: "1.0.0"

  description: \>

    Example AsyncAPI definition for identity-related domain events in the Cell template.

    Real Cells SHOULD copy and adapt this file into concrete event contracts such as

    user\_registered.asyncapi.yaml and user\_password\_changed.asyncapi.yaml.

  x-cell-id: "identity"

  x-bounded-context: "UserAuthenticationAndAuthorization"

  x-contract-kind: "event"

  x-axioms:

    primary:

      \- "A03"   \# Formal contracts

      \- "A04"   \# Standard protocols/formats

      \- "A06"   \# Consistency contracts

      \- "A08"   \# Idempotency

      \- "A12"   \# Backward compatibility

      \- "A13"   \# Deprecation policy

    related:

      \- "A14"

      \- "A15"

      \- "A22"

      \- "A25"

      \- "A29"\\ndefaultContentType: "application/json"\\nservers:

  example-broker:

    url: "amqps://example-broker.local/identity"

    protocol: "amqp"

    description: "Example broker definition for the Identity Cell events. Real deployments MUST override this."

    security:

      \- tls: \[\]

  \# Real Cells may define "dev", "staging", "prod" here with their actual URLs.\\nchannels:

  identity.user.registered:

    description: "Emitted when a new user is registered in a tenant."

    tags:

      \- name: "identity"

      \- name: "user"

    subscribe:

      summary: "Consumers subscribe to user registration events."

      operationId: "UserRegistered"

      message:

        $ref: "\#/components/messages/UserRegistered"

      traits:

        \- $ref: "\#/components/operationTraits/StandardEventOperationTrait"\\n  identity.user.password.changed:

    description: "Emitted when a user changes or resets their password."

    tags:

      \- name: "identity"

      \- name: "user"

      \- name: "security"

    subscribe:

      summary: "Consumers subscribe to password change events."

      operationId: "UserPasswordChanged"

      message:

        $ref: "\#/components/messages/UserPasswordChanged"

      traits:

        \- $ref: "\#/components/operationTraits/StandardEventOperationTrait"\\ncomponents:

  messages:

    UserRegistered:

      name: "UserRegistered"

      title: "User registered event"

      summary: "Indicates that a new user has been successfully created and is now part of the tenant."

      contentType: "application/json"

      correlationId:

        description: "Correlation ID used to group this event with the workflow that produced it."

        location: "$message.header\#/correlation\_id"

      headers:

        $ref: "\#/components/schemas/StandardEventHeaders"

      payload:

        $ref: "\#/components/schemas/UserRegisteredPayload"

      x-idempotency:

        keyFields:

          \- "headers.event\_id"

        strategy: "ignore-duplicates"

      x-compatibility:

        schemaVersionField: "headers.schema\_version"

        changePolicy: "backward-compatible-additive"\\n    UserPasswordChanged:

      name: "UserPasswordChanged"

      title: "User password changed event"

      summary: "Indicates that a user has changed or reset their password."

      contentType: "application/json"

      correlationId:

        description: "Correlation ID used to tie password change events to the initiating request."

        location: "$message.header\#/correlation\_id"

      headers:

        $ref: "\#/components/schemas/StandardEventHeaders"

      payload:

        $ref: "\#/components/schemas/UserPasswordChangedPayload"

      x-idempotency:

        keyFields:

          \- "headers.event\_id"

        strategy: "ignore-duplicates"

      x-compatibility:

        schemaVersionField: "headers.schema\_version"

        changePolicy: "backward-compatible-additive"\\n  schemas:

    StandardEventHeaders:

      type: object

      description: "Standard headers that MUST be present on all Identity Cell events."

      required:

        \- event\_id

        \- event\_type

        \- tenant\_id

        \- occurred\_at

        \- schema\_version

      properties:

        event\_id:

          type: string

          format: uuid

          description: "Unique identifier for this event instance."

        event\_type:

          type: string

          description: "Logical event type, e.g. UserRegistered, UserPasswordChanged."

          example: "UserRegistered"

        tenant\_id:

          type: string

          description: "Identifier of the tenant this event belongs to."

          example: "tenant-1234"

        occurred\_at:

          type: string

          format: date-time

          description: "Timestamp when the event occurred, in RFC 3339 format."

          example: "2025-12-05T10:15:30Z"

        correlation\_id:

          type: string

          description: "Correlation identifier used to trace the workflow that produced this event."

          example: "0b891d6b-c4a1-4fd5-a6f0-fdd6c0f74af2"

        trace\_id:

          type: string

          description: "Distributed tracing trace\_id associated with the request or workflow."

        span\_id:

          type: string

          description: "Span identifier associated with the operation that produced this event."

        schema\_version:

          type: string

          description: "Version of the payload schema in use for this event."

          example: "1.0.0"

        source:

          type: string

          description: "Logical name of the source component inside the Cell."

          example: "IdentityService"

        partition\_key:

          type: string

          description: "Optional partitioning key for brokers that support partitioning."

          example: "tenant-1234"\\n    UserRegisteredPayload:

      type: object

      description: "Payload of the UserRegistered event."

      required:

        \- user\_id

        \- email

        \- status

      properties:

        user\_id:

          type: string

          description: "Stable identifier of the user within the Identity Cell."

          example: "user-5678"

        email:

          type: string

          format: email

          description: "User's primary email address."

          example: "user@example.com"

        display\_name:

          type: string

          description: "Human-readable display name of the user."

          example: "Ada Lovelace"

        status:

          type: string

          description: "Status of the user after registration."

          enum:

            \- "active"

            \- "pending\_verification"

            \- "disabled"

          example: "pending\_verification"

        roles:

          type: array

          description: "List of initial role codes or names assigned to the user."

          items:

            type: string

          example:

            \- "ROLE\_USER"

        metadata:

          type: object

          description: "Additional metadata about the user or registration context."

          additionalProperties: true\\n    UserPasswordChangedPayload:

      type: object

      description: "Payload of the UserPasswordChanged event."

      required:

        \- user\_id

        \- reason

      properties:

        user\_id:

          type: string

          description: "Stable identifier of the user whose password was changed."

          example: "user-5678"

        reason:

          type: string

          description: "Reason for password change."

          enum:

            \- "user\_initiated"

            \- "reset\_via\_email"

            \- "admin\_initiated"

            \- "forced\_rotation"

          example: "user\_initiated"

        mfa\_involved:

          type: boolean

          description: "Indicates whether MFA was required for this password change."

          example: true

        ip\_address:

          type: string

          description: "IP address from which the password change was requested."

          example: "203.0.113.42"

        user\_agent:

          type: string

          description: "User agent string of the client initiating the password change."

          example: "Mozilla/5.0 ..."

        metadata:

          type: object

          description: "Additional metadata about the password change event."

          additionalProperties: true\\n  operationTraits:

    StandardEventOperationTrait:

      bindings:

        amqp:

          ack: true

          durable: true

      x-reliability:

        delivery\_semantics: "at-least-once"

        replay\_safe: true\\n

---

### **3\. What this buys us**

* The **directory is no longer “mysteriously empty”** in the template.

* New Cells have:

  * A concrete **AsyncAPI structure** to copy.

  * Clear guidance on:

    * Headers,

    * Payload shape,

    * Idempotency,

    * Topic naming,

    * Correlation and tracing.

* CTK and the spec stay clean: this file is illustrative, not another mandatory config that we must keep in sync.

If you like this pattern, we can apply the same idea to other “variable-content” dirs (e.g. contracts/rpc, maybe a rpc.example.openapi.yaml).

Perfect, let’s turn these four into proper, self-contained contracts.

I’ll give you, for each file:

* A **short intent/purpose**.

* The **full canonical template content** you can drop into cells/cell\_tpl/....

No overlap with telemetry catalogs (log\_events.yaml, metrics\_catalog.yaml, trace\_spans.yaml) and no conversational noise.

---

## **1\. cells/cell\_tpl/knowledge/definitions/contracts/observability/health\_endpoints.md** {#1.-cells/cell_tpl/knowledge/definitions/contracts/observability/health_endpoints.md}

### **Purpose**

Human-readable contract for the Cell’s **health, readiness, and liveness endpoints**.

* Defines **paths**, **methods**, **status codes**, and **response schema**.

* Makes clear what **/health**, **/ready**, and **/live** mean and how clients must interpret them.

* Ties into A10, A21, A22, A25, A26.

### **File content**

Create (or replace) cells/cell\_tpl/knowledge/definitions/contracts/observability/health\_endpoints.md with:

\# Identity Cell Health Endpoints Contract (Template)\\nThis document specifies the health, readiness, and liveness endpoints exposed by a Cell.

Real Cells MUST either adopt this contract directly or provide a stricter, backward-compatible variant.\\nAlthough this file uses the "Identity Cell" as an example, the semantics are intended to be reusable for any Cell.\\n---\\n\#\# 1\. Overview\\nThe Cell exposes three categories of health endpoints over HTTP:\\n- \*\*Liveness\*\*: \`/live\`

\- \*\*Readiness\*\*: \`/ready\`

\- \*\*Aggregated health\*\*: \`/health\`\\nAll endpoints:\\n- Use HTTP \`GET\`.

\- Return JSON bodies with a common structure.

\- Are intended for \*\*infrastructure and automation\*\* (probes, CTK, SRE runbooks).\\nThe \*\*JSON response envelope\*\* is:\\n\`\`\`json

{

  "status": "pass",

  "component": "identity",

  "version": "1.2.0",

  "timestamp": "2025-12-05T10:15:30Z",

  "checks": {

    "category:check-name": {

      "status": "pass",

      "details": {

        "latency\_ms": 10,

        "optional\_info": "string or nested object"

      }

    }

  }

}\\nWhere:

* status is one of: "pass", "fail", "warn".

* component is the Cell identifier (e.g., "identity").

* version is the Cell version (as declared in knowledge/manifest.yaml).

* timestamp is RFC 3339 UTC.

* checks is a map of check identifiers to their individual status.

---

## **2\. Endpoint summary** {#2.-endpoint-summary}

| Endpoint | Method | Auth | Purpose | 2xx semantics |
| ----- | ----- | ----- | ----- | ----- |
| /live | GET | optional | Is the process alive and able to run code at all? | Process not crashed; main event loop responsive. |
| /ready | GET | optional | Can this instance safely receive production traffic? | All critical dependencies usable; instance routable. |
| /health | GET | optional | Aggregated health for humans and tooling (includes checks). | Same as /ready, plus detailed checks and descriptions. |

**Auth:**

* By default, these endpoints are intended for **internal use** (probes, CTK, observability tools).

* Cells MAY restrict access via:

  * network controls (e.g. only internal networks/k8s),

  * or auth (e.g. mTLS, internal tokens).

* If access is restricted, this MUST be documented in the deployment/runtime documentation.

---

## **3\. /live – Liveness probe** {#3.-/live-–-liveness-probe}

### **3.1 Semantics**

* **Purpose**: Answer whether the process is "alive" (not deadlocked, not crashed).

* **Scope**: Does *not* check dependencies (databases, queues, etc.).

* **Probes**: Kubernetes livenessProbe or equivalent should hit this endpoint.

### **3.2 Contract**

* **Method**: GET

* **Path**: /live

* **Query parameters**: None (any query parameters MUST be ignored).

* **Request body**: None.

**Responses:**

200 OK – Process is alive.

 {

  "status": "pass",

  "component": "identity",

  "version": "1.2.0",

  "timestamp": "2025-12-05T10:15:30Z",

  "checks": {

    "process:alive": {

      "status": "pass",

      "details": {}

    }

  }

}\\n503 Service Unavailable – Process is not healthy enough to be considered alive.

 {

  "status": "fail",

  "component": "identity",

  "version": "1.2.0",

  "timestamp": "2025-12-05T10:15:30Z",

  "checks": {

    "process:alive": {

      "status": "fail",

      "details": {

        "reason": "event-loop-unresponsive"

      }

    }

  }

}\\nCells MUST NOT return 3xx or 4xx for liveness; liveness is strictly 200 or 503.

---

## **4\. /ready – Readiness probe** {#4.-/ready-–-readiness-probe}

### **4.1 Semantics**

* **Purpose**: Indicate whether this instance can safely receive production traffic.

* **Scope**: Includes critical dependencies:

  * primary datastore(s),

  * critical caches,

  * messaging systems,

  * essential internal subsystems.

### **4.2 Contract**

* **Method**: GET

* **Path**: /ready

* **Query parameters**: OPTIONAL ?details=true to include full checks map.

**Responses:**

200 OK – Instance is ready to receive traffic.

 {

  "status": "pass",

  "component": "identity",

  "version": "1.2.0",

  "timestamp": "2025-12-05T10:15:30Z",

  "checks": {

    "datastore:identity\_db": {

      "status": "pass",

      "details": {

        "latency\_ms": 12

      }

    },

    "cache:identity\_token\_cache": {

      "status": "pass",

      "details": {

        "latency\_ms": 3

      }

    }

  }

}\\n503 Service Unavailable – Instance is not ready.

 {

  "status": "fail",

  "component": "identity",

  "version": "1.2.0",

  "timestamp": "2025-12-05T10:15:30Z",

  "checks": {

    "datastore:identity\_db": {

      "status": "fail",

      "details": {

        "reason": "connection-timeout"

      }

    },

    "cache:identity\_token\_cache": {

      "status": "warn",

      "details": {

        "reason": "degraded-latency",

        "latency\_ms": 45

      }

    }

  }

}\\nCells MAY include additional checks, but MUST NOT change the meaning of status and HTTP codes.

---

## **5\. /health – Aggregated health endpoint** {#5.-/health-–-aggregated-health-endpoint}

### **5.1 Semantics**

* **Purpose**: Provide a human- and machine-readable summary of the Cell’s health.

* **Scope**: Includes readiness checks plus additional non-critical checks.

Typical consumers: CTK, dashboards, manual inspection.

### **5.2 Contract**

* **Method**: GET

* **Path**: /health

* **Query parameters**:

  * OPTIONAL ?details=true – include all checks with extended details.

  * OPTIONAL ?category=\<category\> – filter checks by category prefix (e.g., datastore, cache).

**Responses:**

200 OK – Health status is "pass" or "warn".

 {

  "status": "warn",

  "component": "identity",

  "version": "1.2.0",

  "timestamp": "2025-12-05T10:15:30Z",

  "checks": {

    "datastore:identity\_db": {

      "status": "pass",

      "details": {

        "latency\_ms": 15

      }

    },

    "messaging:identity\_events\_exchange": {

      "status": "warn",

      "details": {

        "reason": "latency-degraded",

        "latency\_ms": 130

      }

    }

  }

}\\n503 Service Unavailable – Health status is "fail".

 {

  "status": "fail",

  "component": "identity",

  "version": "1.2.0",

  "timestamp": "2025-12-05T10:15:30Z",

  "checks": {

    "datastore:identity\_db": {

      "status": "fail",

      "details": {

        "reason": "connection-timeout"

      }

    }

  }

}\\n

---

## **6\. Schema summary** {#6.-schema-summary}

All three endpoints share the same JSON shape:

* status: "pass" | "fail" | "warn"

* component: string (Cell identifier)

* version: string (semantic version)

* timestamp: RFC 3339 UTC timestamp

* checks: object (map of "category:name" → { status, details })

  * status: "pass" | "fail | "warn"

  * details: object with implementation-specific fields.

Cells MUST ensure that version matches knowledge/manifest.yaml and definitions/cell/versions.yaml.\\n---\\n\#\# 2\. \`cells/cell\_tpl/knowledge/definitions/contracts/observability/logs.schema.yaml\`\\n\#\#\# Purpose\\nMachine-readable \*\*schema for log entries\*\* produced by the Cell.\\n- Defines required fields (timestamp, severity, event\_code, tenant\_id, trace\_id, etc.).

\- Specifies allowed \*\*severity levels\*\* and basic field types.

\- Works together with:

  \- \`definitions/telemetry/log\_events.yaml\` (which enumerates event codes),

  \- \`evidence/observability/logs\_sample.json\` (actual log samples).\\n\#\#\# File content\\nCreate (or replace) \`cells/cell\_tpl/knowledge/definitions/contracts/observability/logs.schema.yaml\` with:\\n\`\`\`yaml

api\_version: "axioms.erparom.dev/observability-logs.v1alpha1"\\ndescription: \>

  Canonical schema for structured log entries produced by the Cell.

  This schema is used by CTK and observability tooling to validate logs\_sample.json

  and to enforce consistent logging practices across Cells.\\nseverity\_levels:

  \# Allowed severity levels for log entries.

  allowed:

    \- "TRACE"

    \- "DEBUG"

    \- "INFO"

    \- "WARN"

    \- "ERROR"

    \- "FATAL"

  default: "INFO"\\nschema:

  \# JSON Schema for a single log entry, expressed in YAML.

  $schema: "https://json-schema.org/draft/2020-12/schema"

  title: "Cell Log Entry"

  type: object

  additionalProperties: true\\n  required:

    \- timestamp

    \- level

    \- message

    \- event\_code

    \- service

    \- env

    \- tenant\_id

    \- trace\_id

    \- span\_id\\n  properties:

    timestamp:

      type: string

      format: date-time

      description: "Log event timestamp in RFC 3339 format (UTC)."\\n    level:

      type: string

      description: "Severity level of the log event."

      enum:

        \- "TRACE"

        \- "DEBUG"

        \- "INFO"

        \- "WARN"

        \- "ERROR"

        \- "FATAL"\\n    message:

      type: string

      description: "Human-readable description of the event."\\n    event\_code:

      type: string

      description: \>

        Stable event code identifying the type of log event.

        The set of codes and their semantics MUST be defined in definitions/telemetry/log\_events.yaml.

      pattern: "^\[A-Z0-9\_\]+$"\\n    service:

      type: string

      description: "Logical name of the service or Cell component emitting the log."

      example: "identity-api"\\n    env:

      type: string

      description: "Deployment environment."

      example: "prod"\\n    tenant\_id:

      type: string

      description: "Identifier of the tenant associated with this log entry, if applicable."

      example: "tenant-1234"\\n    user\_id:

      type: \["string", "null"\]

      description: "Identifier of the user associated with this event, if any."

      example: "user-5678"\\n    trace\_id:

      type: string

      description: "Distributed tracing trace identifier associated with this log event."\\n    span\_id:

      type: string

      description: "Span identifier within the trace."\\n    logger:

      type: \["string", "null"\]

      description: "Name of the logger or logging category."

      example: "Identity.AuthService"\\n    correlation\_id:

      type: \["string", "null"\]

      description: "Correlation identifier used to group related operations or requests."\\n    http:

      type: object

      description: "HTTP-related information, if the log is associated with an HTTP request."

      additionalProperties: true

      properties:

        method:

          type: string

          description: "HTTP method."

          example: "POST"

        path:

          type: string

          description: "Request path."

          example: "/api/v1/login"

        status\_code:

          type: integer

          description: "HTTP response status code."

          example: 200

        client\_ip:

          type: string

          description: "Client IP address, if captured."

        user\_agent:

          type: string

          description: "User-Agent header value."\\n    error:

      type: object

      description: "Error information when the log represents an error or exception."

      additionalProperties: true

      properties:

        kind:

          type: \["string", "null"\]

          description: "Logical error kind or exception type."

          example: "InvalidCredentialsError"

        message:

          type: \["string", "null"\]

          description: "Error message."

        stack\_trace:

          type: \["string", "null"\]

          description: "Stack trace string, if available and allowed by policy."\\n    context:

      type: object

      description: "Additional context-specific key-value pairs."

      additionalProperties: true\\n

---

## **3\. cells/cell\_tpl/knowledge/definitions/contracts/observability/metrics.schema.yaml** {#3.-cells/cell_tpl/knowledge/definitions/contracts/observability/metrics.schema.yaml}

### **Purpose**

Machine-readable **schema for metric samples** emitted by the Cell.

* Defines the shape of a single metric data point or time series point.

* Specifies allowed metric types and core attribute conventions.

* Works with:

  * definitions/telemetry/metrics\_catalog.yaml (which enumerates metrics),

  * evidence/observability/metrics\_snapshot.json (actual sample).

### **File content**

Create (or replace) cells/cell\_tpl/knowledge/definitions/contracts/observability/metrics.schema.yaml with:

api\_version: "axioms.erparom.dev/observability-metrics.v1alpha1"\\ndescription: \>

  Canonical schema for metric samples emitted by the Cell.

  This schema is used by CTK and observability tooling to validate metrics\_snapshot.json

  and to enforce consistent metric structures across Cells.\\nmetric\_types:

  allowed:

    \- "counter"

    \- "gauge"

    \- "histogram"

    \- "summary"

  default: "counter"\\nbase\_attributes:

  \# Attributes that SHOULD appear on most metrics where applicable.

  required:

    \- "service"

    \- "env"

  recommended:

    \- "tenant\_id"

    \- "region"

    \- "instance"

  notes: \>

    metric-specific attribute requirements (such as user\_id, outcome, error\_kind) MUST be defined

    in definitions/telemetry/metrics\_catalog.yaml.\\nsample\_schema:

  \# JSON Schema for a single metric sample, expressed in YAML.

  $schema: "https://json-schema.org/draft/2020-12/schema"

  title: "Cell Metric Sample"

  type: object

  additionalProperties: true\\n  required:

    \- name

    \- type

    \- value

    \- attributes

    \- timestamp\\n  properties:

    name:

      type: string

      description: \>

        Fully-qualified metric name.

        The list of valid names and their semantics MUST be defined in definitions/telemetry/metrics\_catalog.yaml.

      example: "identity\_requests\_total"\\n    type:

      type: string

      description: "Metric type."

      enum:

        \- "counter"

        \- "gauge"

        \- "histogram"

        \- "summary"\\n    description:

      type: \["string", "null"\]

      description: "Human-readable description of what this metric represents."\\n    unit:

      type: \["string", "null"\]

      description: "Unit of measurement (e.g., 'requests', 'seconds', 'bytes')."

      example: "requests"\\n    value:

      description: \>

        Numeric value for simple metrics (counter, gauge, summary count/value).

        For histograms, this represents the aggregated count, and buckets are provided separately.

      anyOf:

        \- type: "number"

        \- type: "integer"\\n    buckets:

      type: \["array", "null"\]

      description: "Histogram buckets, if this sample represents a histogram."

      items:

        type: object

        required:

          \- le

          \- count

        properties:

          le:

            type: number

            description: "Upper bound of the bucket (less-than-or-equal value)."

          count:

            type: integer

            description: "Cumulative count of observations up to and including this bucket."\\n    attributes:

      type: object

      description: "Metric attributes (labels)."

      additionalProperties:

        \# Attribute values are typically strings, but may include numbers or booleans depending on the backend.

        anyOf:

          \- type: "string"

          \- type: "number"

          \- type: "integer"

          \- type: "boolean"

      properties:

        service:

          type: \["string", "null"\]

          description: "Logical name of the service or Cell component emitting the metric."

          example: "identity-api"

        env:

          type: \["string", "null"\]

          description: "Deployment environment."

          example: "prod"

        tenant\_id:

          type: \["string", "null"\]

          description: "Identifier of the tenant associated with this metric sample, if applicable."

        region:

          type: \["string", "null"\]

          description: "Region or availability domain."

        instance:

          type: \["string", "null"\]

          description: "Instance identifier (pod name, host ID, etc.)."\\n    timestamp:

      type: string

      format: date-time

      description: "Timestamp at which this metric sample was measured (RFC 3339, UTC)."\\n

---

## **4\. cells/cell\_tpl/knowledge/definitions/contracts/observability/traces.schema.yaml** {#4.-cells/cell_tpl/knowledge/definitions/contracts/observability/traces.schema.yaml}

### **Purpose**

Machine-readable **schema for trace spans** produced by the Cell.

* Defines the structure of a span (trace\_id, span\_id, name, timings, attributes).

* Works with:

  * definitions/telemetry/trace\_spans.yaml (canonical span names and attributes),

  * evidence/observability/traces\_sample.json (actual spans).

### **File content**

Create (or replace) cells/cell\_tpl/knowledge/definitions/contracts/observability/traces.schema.yaml with:

api\_version: "axioms.erparom.dev/observability-traces.v1alpha1"\\ndescription: \>

  Canonical schema for trace spans emitted by the Cell.

  This schema is used by CTK and observability tooling to validate traces\_sample.json

  and to enforce consistent tracing structures across Cells.\\nspan\_kinds:

  allowed:

    \- "INTERNAL"

    \- "SERVER"

    \- "CLIENT"

    \- "PRODUCER"

    \- "CONSUMER"

  default: "INTERNAL"\\nstatus\_codes:

  allowed:

    \- "UNSET"

    \- "OK"

    \- "ERROR"

  default: "UNSET"\\nspan\_schema:

  \# JSON Schema for a single span, expressed in YAML.

  $schema: "https://json-schema.org/draft/2020-12/schema"

  title: "Cell Trace Span"

  type: object

  additionalProperties: true\\n  required:

    \- trace\_id

    \- span\_id

    \- name

    \- kind

    \- start\_time

    \- end\_time

    \- attributes\\n  properties:

    trace\_id:

      type: string

      description: \>

        Trace identifier (typically a 16-byte or 32-character hex string)

        consistent with the tracing backend (e.g., OpenTelemetry).\\n    span\_id:

      type: string

      description: "Span identifier (typically an 8-byte or 16-character hex string)."\\n    parent\_span\_id:

      type: \["string", "null"\]

      description: "Identifier of the parent span, if any."\\n    name:

      type: string

      description: \>

        Span name.

        Canonical span names and their semantics MUST be defined in definitions/telemetry/trace\_spans.yaml.

      example: "Identity.Login"\\n    kind:

      type: string

      description: "Span kind indicating the role of this span in the trace."

      enum:

        \- "INTERNAL"

        \- "SERVER"

        \- "CLIENT"

        \- "PRODUCER"

        \- "CONSUMER"\\n    start\_time:

      type: string

      format: date-time

      description: "Span start time in RFC 3339 format (UTC)."\\n    end\_time:

      type: string

      format: date-time

      description: "Span end time in RFC 3339 format (UTC)."\\n    status:

      type: object

      description: "Status of the span."

      additionalProperties: true

      properties:

        code:

          type: string

          description: "Status code."

          enum:

            \- "UNSET"

            \- "OK"

            \- "ERROR"

        message:

          type: \["string", "null"\]

          description: "Optional status message describing the error or condition."\\n    attributes:

      type: object

      description: "Span attributes (tags)."

      additionalProperties:

        anyOf:

          \- type: "string"

          \- type: "number"

          \- type: "integer"

          \- type: "boolean"

      properties:

        service:

          type: \["string", "null"\]

          description: "Logical service/component name."

          example: "identity-api"

        env:

          type: \["string", "null"\]

          description: "Deployment environment."

          example: "prod"

        tenant\_id:

          type: \["string", "null"\]

          description: "Tenant identifier, if applicable."

        user\_id:

          type: \["string", "null"\]

          description: "User identifier if this span was triggered on behalf of a user."

        http.method:

          type: \["string", "null"\]

          description: "HTTP method for HTTP spans."

        http.route:

          type: \["string", "null"\]

          description: "Logical HTTP route (e.g., /api/v1/login)."

        http.status\_code:

          type: \["integer", "null"\]

          description: "HTTP status code for HTTP spans."

        db.system:

          type: \["string", "null"\]

          description: "Database system (e.g., postgresql, redis)."

        db.statement:

          type: \["string", "null"\]

          description: "Database statement or query, if captured and allowed by policy."\\n    events:

      type: \["array", "null"\]

      description: "Time-stamped events within the span (e.g., 'exception', 'checkpoint')."

      items:

        type: object

        required:

          \- name

          \- timestamp

        properties:

          name:

            type: string

            description: "Event name."

          timestamp:

            type: string

            format: date-time

            description: "Event timestamp in RFC 3339 format (UTC)."

          attributes:

            type: object

            description: "Event attributes."

            additionalProperties:

              anyOf:

                \- type: "string"

                \- type: "number"

                \- type: "integer"

                \- type: "boolean"\\n

---

If you’re happy with these, next step could be to define the matching **telemetry catalogs**:

* definitions/telemetry/log\_events.yaml

* definitions/telemetry/metrics\_catalog.yaml

* definitions/telemetry/trace\_spans.yaml

so that CTK can fully cross-check: contracts/\*schema.yaml ↔ telemetry/\* ↔ evidence/observability/\*.

Good, vamos directo a los tres archivos y nada de relleno.

I’ll give you for each:

* What it’s for.

* The **full canonical template** you can drop into cells/cell\_tpl/knowledge/definitions/contracts/policy/.

Where I assume we now standardize on:

policy\_contract.yaml   \# machine-readable schemas for policy I/O

authorization.rego     \# main OPA module

rate\_limits.yaml       \# rate-limit config consumed by the rate-limit engine\\nYou can later adjust manifest.yaml / policy\_manifest.yaml decision\_io.\*\_schema\_ref to point into policy\_contract.yaml with JSON Pointers like policy\_contract.yaml\#/schemas/authz/input.

---

## **1\) policy\_contract.yaml** {#1)-policy_contract.yaml}

### **Purpose**

Canonical, machine-readable definition of **policy request/response shapes**:

* **Authz** decisions (AUTHZ\_MAIN).

* **Rate limit** decisions (RATE\_LIMIT\_MAIN).

* (Optionally others later, e.g. data retention).

This is what:

* OPA policies (e.g. authorization.rego) **assume in input**.

* The enforcement engine uses to shape **outputs**.

### **File: cells/cell\_tpl/knowledge/definitions/contracts/policy/policy\_contract.yaml**

api\_version: "axioms.erparom.dev/policy-contract.v1alpha1"\\nmetadata:

  description: \>

    Canonical input/output schemas for policy decisions in this Cell, including authorization

    and rate limiting. Policy implementations (e.g. OPA/Rego, config files) MUST conform to

    these shapes.

  owner\_team: "platform-identity"

  last\_updated: "2025-12-05"\\nschemas:

  authz:

    input:

      $schema: "https://json-schema.org/draft/2020-12/schema"

      title: "Authorization Policy Input"

      type: object

      additionalProperties: true\\n      required:

        \- subject

        \- action

        \- resource

        \- context

        \- env\\n      properties:

        subject:

          type: object

          description: "Information about the principal (user or workload) performing the action."

          additionalProperties: true

          required:

            \- type

          properties:

            type:

              type: string

              description: "Subject type."

              enum:

                \- "user"

                \- "service"

            id:

              type: \["string", "null"\]

              description: "Internal identifier of the subject (user\_id, workload\_id, etc.)."

            roles:

              type: \["array", "null"\]

              description: "Roles assigned to the subject within the tenant."

              items:

                type: string

            groups:

              type: \["array", "null"\]

              description: "Groups to which the subject belongs."

              items:

                type: string

            status:

              type: \["string", "null"\]

              description: "Status of the subject (active, disabled, etc.)."

              enum:

                \- "active"

                \- "disabled"

                \- "locked"

                \- "unknown"

            attributes:

              type: \["object", "null"\]

              description: "Additional subject attributes (department, tenants, etc.)."

              additionalProperties: true\\n        action:

          type: object

          description: "Logical action being requested."

          additionalProperties: true

          required:

            \- name

          properties:

            name:

              type: string

              description: "Logical action name (e.g. login, createUser, assignRole)."

            operation:

              type: \["string", "null"\]

              description: "Low-level operation verb when applicable (e.g. read, write, delete)."

            scope:

              type: \["string", "null"\]

              description: "Optional scope or capability string."\\n        resource:

          type: object

          description: "Target resource on which the action is performed."

          additionalProperties: true

          required:

            \- type

          properties:

            type:

              type: string

              description: "Resource type (e.g. User, Role, Token)."

            id:

              type: \["string", "null"\]

              description: "Identifier of the resource instance, if applicable."

            tenant\_id:

              type: \["string", "null"\]

              description: "Tenant to which the resource belongs."\\n        context:

          type: object

          description: "Request or call context."

          additionalProperties: true

          properties:

            correlation\_id:

              type: \["string", "null"\]

              description: "Correlation identifier for the request/operation."

            trace\_id:

              type: \["string", "null"\]

              description: "Trace identifier, if available."

            span\_id:

              type: \["string", "null"\]

              description: "Span identifier, if available."

            client\_ip:

              type: \["string", "null"\]

              description: "Client IP address, if applicable."

            user\_agent:

              type: \["string", "null"\]

              description: "User agent string."

            channel:

              type: \["string", "null"\]

              description: "Channel through which the request was made (web, mobile, api-gateway, etc.)."

            mfa\_verified:

              type: \["boolean", "null"\]

              description: "Indicates whether MFA has been satisfied for this request."\\n        env:

          type: object

          description: "Deployment and runtime environment information."

          additionalProperties: true

          required:

            \- env

          properties:

            env:

              type: string

              description: "Environment name."

              example: "prod"

            region:

              type: \["string", "null"\]

              description: "Deployment region."

            cell\_id:

              type: \["string", "null"\]

              description: "Identifier of the Cell making the decision."

              example: "identity"

            request\_time:

              type: \["string", "null"\]

              format: "date-time"

              description: "Timestamp of the request being evaluated."\\n    output:

      $schema: "https://json-schema.org/draft/2020-12/schema"

      title: "Authorization Policy Output"

      type: object

      additionalProperties: true\\n      required:

        \- allow

        \- decision\_id

        \- timestamp\\n      properties:

        allow:

          type: boolean

          description: "True if the action is authorized, false otherwise."\\n        decision\_id:

          type: string

          description: "Identifier of the decision for audit traceability."\\n        reason:

          type: \["string", "null"\]

          description: "Short machine-readable reason for the decision (e.g. role\_missing, subject\_disabled)."\\n        message:

          type: \["string", "null"\]

          description: "Optional human-readable explanation of the decision."\\n        obligations:

          type: \["array", "null"\]

          description: "Optional list of obligations the caller MUST enforce when allow=true."

          items:

            type: object

            additionalProperties: true

            required:

              \- type

            properties:

              type:

                type: string

                description: "Obligation type (e.g. log, mfa\_required, mask\_fields)."

              params:

                type: \["object", "null"\]

                description: "Obligation-specific parameters."

                additionalProperties: true\\n        attributes:

          type: \["object", "null"\]

          description: "Optional attributes added by the PDP for downstream use."

          additionalProperties: true\\n        timestamp:

          type: string

          format: date-time

          description: "Timestamp at which the decision was made."\\n  rate\_limit:

    input:

      $schema: "https://json-schema.org/draft/2020-12/schema"

      title: "Rate Limit Policy Input"

      type: object

      additionalProperties: true\\n      required:

        \- key

        \- operation

        \- env\\n      properties:

        key:

          type: object

          description: "Identity used for rate limiting (tenant, subject, client, etc.)."

          additionalProperties: true

          properties:

            tenant\_id:

              type: \["string", "null"\]

            subject\_id:

              type: \["string", "null"\]

            client\_ip:

              type: \["string", "null"\]

            extra:

              type: \["object", "null"\]

              additionalProperties: true

              description: "Additional dimensions included in the rate-limit key."\\n        operation:

          type: object

          description: "Operation being rate-limited."

          additionalProperties: true

          required:

            \- name

          properties:

            name:

              type: string

              description: "Logical operation name (e.g. login, refreshToken)."

            surface:

              type: \["string", "null"\]

              description: "API surface (IdentityPublicAPI, IdentityAdminAPI, etc.)."\\n        env:

          type: object

          description: "Environment and runtime context."

          additionalProperties: true

          required:

            \- env

          properties:

            env:

              type: string

            region:

              type: \["string", "null"\]

            cell\_id:

              type: \["string", "null"\]\\n    output:

      $schema: "https://json-schema.org/draft/2020-12/schema"

      title: "Rate Limit Policy Output"

      type: object

      additionalProperties: true\\n      required:

        \- allowed

        \- decision\_id

        \- limit

        \- remaining

        \- window\_expires\_at\\n      properties:

        allowed:

          type: boolean

          description: "True if the request is within limits, false if it should be rejected or throttled."\\n        decision\_id:

          type: string

          description: "Identifier of the decision for audit purposes."\\n        limit:

          type: integer

          description: "Maximum number of allowed requests within the window."\\n        remaining:

          type: integer

          description: "Number of remaining requests before hitting the limit."\\n        window\_expires\_at:

          type: string

          format: date-time

          description: "Time when the current rate-limit window resets."\\n        retry\_after\_seconds:

          type: \["integer", "null"\]

          description: "Recommended number of seconds to wait before retrying, if allowed=false."\\n        reason:

          type: \["string", "null"\]

          description: "Short machine-readable reason (e.g. limit\_exceeded, config\_error)."\\n        attributes:

          type: \["object", "null"\]

          description: "Optional extra attributes for downstream logging/metrics."

          additionalProperties: true\\nYou can extend schemas with more blocks (data\_retention, etc.) later.

---

## **2\) authorization.rego** {#2)-authorization.rego}

### **Purpose**

OPA/Rego implementation of the **main authorization policy** (AUTHZ\_MAIN):

* Assumes input conforms to schemas.authz.input above.

* Produces a result that can be mapped to schemas.authz.output (allow, reason, etc.).

In practice your enforcement layer will:

* Call data.identity.authz.allow (bool).

* And optionally read helper rules like data.identity.authz.reason to fill the output.

### **File: cells/cell\_tpl/knowledge/definitions/contracts/policy/authorization.rego**

package identity.authz\\n\# Default deny (fail-closed)

default allow \= false\\n\# Default reason when no rule matches.

default reason \= "no\_matching\_rule"\\ndefault obligations \= \[\]

default attributes \= {}\\n\# Helper: subject is a disabled user.

subject\_disabled {

  input.subject.type \== "user"

  input.subject.status \== "disabled"

}\\n\# Helper: subject is a service/workload.

subject\_is\_service {

  input.subject.type \== "service"

}\\n\# Helper: action names

action\_is\_login {

  input.action.name \== "login"

}\\naction\_is\_manage\_users {

  input.action.name \== "manage\_users"

}\\naction\_is\_assign\_role {

  input.action.name \== "assignRole"

}\\n\# Helper: check if a role is present

has\_role(role) {

  some r

  input.subject.roles\[r\] \== role

}\\n\# Top-level allow rules.

\# You can add or refine these according to your Cell's requirements.\\n\# Deny if subject is disabled.

allow {

  subject\_disabled

  \# This rule is intentionally empty; default allow=false applies.

}\\nreason := "subject\_disabled" {

  subject\_disabled

}\\n\# Allow login for active users.

allow {

  action\_is\_login

  not subject\_disabled

}\\nreason := "login\_allowed" {

  action\_is\_login

  not subject\_disabled

}\\n\# Allow manage\_users only to admins.

allow {

  action\_is\_manage\_users

  has\_role("ROLE\_ADMIN")

}\\nreason := "manage\_users\_allowed\_for\_admin" {

  action\_is\_manage\_users

  has\_role("ROLE\_ADMIN")

}\\n\# Allow assignRole only to admins.

allow {

  action\_is\_assign\_role

  has\_role("ROLE\_ADMIN")

}\\nreason := "assign\_role\_allowed\_for\_admin" {

  action\_is\_assign\_role

  has\_role("ROLE\_ADMIN")

}\\n\# Example of a more complex rule:

\# Only service workloads with a specific role can manage tokens.

allow {

  input.action.name \== "manage\_tokens"

  subject\_is\_service

  has\_role("ROLE\_IDENTITY\_SERVICE")

}\\nreason := "manage\_tokens\_allowed\_for\_identity\_service" {

  input.action.name \== "manage\_tokens"

  subject\_is\_service

  has\_role("ROLE\_IDENTITY\_SERVICE")

}\\n\# Obligations: for certain decisions, require MFA or extra logging.

obligations := \[{"type": "mfa\_required"}\] {

  action\_is\_manage\_users

  not input.context.mfa\_verified

}\\nobligations := \[{"type": "log", "params": {"level": "INFO", "event\_code": "AUTHZ\_DECISION"}}\] {

  not subject\_disabled

}\\nNotes:

* This is a **template**, not a finished policy.

* It is compatible with the authz.input schema: uses input.subject, input.action, input.context.

* Your enforcement wrapper can do something like:

  * allow := data.identity.authz.allow

  * reason := data.identity.authz.reason

  * obligations := data.identity.authz.obligations

  * attributes := data.identity.authz.attributes

and then assemble the full authz.output object.

---

## **3\) rate\_limits.yaml** {#3)-rate_limits.yaml}

### **Purpose**

Configuration for **rate limiting rules** used by RATE\_LIMIT\_MAIN:

* Declarative rules: which operations to limit, keys, limits, windows.

* Referenced in policy\_manifest.yaml as a config-yaml source with entrypoint: "global".

### **File: cells/cell\_tpl/knowledge/definitions/contracts/policy/rate\_limits.yaml**

api\_version: "axioms.erparom.dev/rate-limits.v1alpha1"\\nmetadata:

  description: \>

    Declarative rate limiting configuration for the Cell. This file is consumed by the

    rate-limiting engine referenced by the RATE\_LIMIT\_MAIN policy entry.

  owner\_team: "platform-identity"

  last\_updated: "2025-12-05"\\nglobal:

  \# Global rules that apply unless explicitly overridden.

  rules:

    \- id: "login-per-tenant"

      description: "Limit login attempts per tenant to protect downstream systems."

      enabled: true\\n      scope:

        surfaces:

          \- "IdentityPublicAPI"

        operations:

          \- "login"\\n      key:

        \# Components of the rate-limit key. The engine will build the key from these fields

        \# in the rate\_limit.input.key \+ env.

        parts:

          \- "tenant\_id"\\n      limit:

        requests: 1000

        window: "1m"            \# ISO-8601-like duration (1m, 5m, 1h, etc.)\\n      behavior:

        on\_exceed: "reject"     \# "reject" | "delay"

        http\_status: 429

        log\_event\_code: "RATE\_LIMIT\_TENANT\_LOGIN"

        metrics:

          enabled: true

          metric\_name: "identity\_login\_rate\_limited\_total"\\n    \- id: "login-per-user"

      description: "Limit login attempts per user to reduce brute-force attacks."

      enabled: true\\n      scope:

        surfaces:

          \- "IdentityPublicAPI"

        operations:

          \- "login"\\n      key:

        parts:

          \- "tenant\_id"

          \- "subject\_id"

          \- "client\_ip"\\n      limit:

        requests: 10

        window: "5m"\\n      behavior:

        on\_exceed: "reject"

        http\_status: 429

        log\_event\_code: "RATE\_LIMIT\_USER\_LOGIN"

        metrics:

          enabled: true

          metric\_name: "identity\_user\_login\_rate\_limited\_total"\\n    \- id: "token-refresh-per-tenant"

      description: "Limit token refreshes per tenant to avoid abuse."

      enabled: true\\n      scope:

        surfaces:

          \- "IdentityPublicAPI"

        operations:

          \- "refreshToken"\\n      key:

        parts:

          \- "tenant\_id"\\n      limit:

        requests: 5000

        window: "5m"\\n      behavior:

        on\_exceed: "delay"

        delay\_ms: 200

        http\_status: 429

        log\_event\_code: "RATE\_LIMIT\_TOKEN\_REFRESH"

        metrics:

          enabled: true

          metric\_name: "identity\_token\_refresh\_rate\_limited\_total"\\noverrides:

  \# Optional environment-specific overrides.

  by\_env:

    dev:

      rules:

        \- id: "login-per-user"

          enabled: false   \# disable strict user login limits in dev

    staging:

      rules:

        \- id: "login-per-user"

          limit:

            requests: 50

            window: "5m"\\nThe **engine** that evaluates RATE\_LIMIT\_MAIN will:

* Read this file.

  * Select global.rules (and merge any overrides.by\_env\[env\] where env matches rate\_limit.input.env.env).

  * Match scope.surfaces / operations against rate\_limit.input.operation.

  * Build a key from key.parts (mapping parts to fields on input.key).

  * Compute allowed/limit/remaining/window\_expires\_at consistent with policy\_contract.yaml.schemas.rate\_limit.output.

---

If you want next, we can:

* Adjust policy\_manifest.yaml to reference policy\_contract.yaml\#/schemas/... instead of the old POLICY\_CONTRACT.md\#..., with explicit “find & replace” instructions, or

* Move on to the telemetry catalogs so CTK can fully traverse contracts → telemetry → evidence.

Yep, same pattern as with events: important directory, no mandatory concrete files → we give a rich .example to guide humans, but CTK doesn’t depend on it.

Let’s add:

cells/cell\_tpl/knowledge/definitions/contracts/rpc/rpc.example.openapi.yaml\\n

---

## **rpc.example.openapi.yaml** {#rpc.example.openapi.yaml}

**Purpose**

* Show how to describe the Identity Cell RPC surface using **OpenAPI**.

* Demonstrate:

  * Public vs admin surfaces (x-surface).

  * Versioning via header X-API-Version.

  * Standard errors, auth, and multi-tenant aspects.

* Real cells will provide their own openapi.yaml; this is a template.

You can drop this file as-is in:

cells/cell\_tpl/knowledge/definitions/contracts/rpc/rpc.example.openapi.yaml\\nopenapi: 3.0.3\\ninfo:

  title: "Identity Cell RPC API (Example)"

  version: "1.2.0"

  description: \>

    Example OpenAPI definition for the Identity Cell.

    Real Cells SHOULD provide a concrete openapi.yaml file that follows these conventions.

  x-cell-id: "identity"

  x-bounded-context: "UserAuthenticationAndAuthorization"

  x-contract-kind: "rpc"

  x-axioms:

    primary:

      \- "A03"   \# Formal contracts

      \- "A04"   \# Standard protocols/formats

      \- "A08"   \# Idempotency

      \- "A10"   \# Timeouts (client/server config, not shown here)

      \- "A12"   \# Backward compatibility

      \- "A14"   \# Version negotiation

      \- "A15"   \# Contract evolution

    related:

      \- "A06"

      \- "A21"

      \- "A25"

      \- "A26"

      \- "A29"\\nservers:

  \- url: "https://api.example.com/identity"

    description: "Example production endpoint. Real deployments MUST override."

  \- url: "https://staging-api.example.com/identity"

    description: "Example staging endpoint."\\ntags:

  \- name: "Auth"

    description: "Authentication endpoints (public surface)."

  \- name: "Users"

    description: "User management endpoints (admin surface)."\\npaths:

  /v1/login:

    post:

      summary: "User login"

      description: "Authenticate a user using credentials and issue a token."

      operationId: "login"

      tags:

        \- "Auth"

      x-surface: "IdentityPublicAPI"

      x-idempotency: "idempotent-per-credentials"

      parameters:

        \- $ref: "\#/components/parameters/ApiVersionHeader"

      requestBody:

        required: true

        content:

          application/json:

            schema:

              $ref: "\#/components/schemas/LoginRequest"

      responses:

        "200":

          description: "Authentication succeeded."

          content:

            application/json:

              schema:

                $ref: "\#/components/schemas/LoginResponse"

        "400":

          description: "Invalid request payload."

          content:

            application/json:

              schema:

                $ref: "\#/components/schemas/ErrorResponse"

        "401":

          description: "Invalid credentials or unauthorized."

          content:

            application/json:

              schema:

                $ref: "\#/components/schemas/ErrorResponse"

        "429":

          description: "Rate limit exceeded for login attempts."

          content:

            application/json:

              schema:

                $ref: "\#/components/schemas/ErrorResponse"

        "500":

          description: "Unexpected server error."

          content:

            application/json:

              schema:

                $ref: "\#/components/schemas/ErrorResponse"\\n  /v1/logout:

    post:

      summary: "User logout"

      description: "Invalidate the current access token or session."

      operationId: "logout"

      tags:

        \- "Auth"

      x-surface: "IdentityPublicAPI"

      security:

        \- BearerAuth: \[\]

      parameters:

        \- $ref: "\#/components/parameters/ApiVersionHeader"

      responses:

        "204":

          description: "Logout succeeded; token/session invalidated."

        "401":

          description: "Missing or invalid token."

          content:

            application/json:

              schema:

                $ref: "\#/components/schemas/ErrorResponse"

        "500":

          description: "Unexpected server error."

          content:

            application/json:

              schema:

                $ref: "\#/components/schemas/ErrorResponse"\\n  /v1/users:

    get:

      summary: "List users"

      description: "Retrieve a paginated list of users for a tenant."

      operationId: "listUsers"

      tags:

        \- "Users"

      x-surface: "IdentityAdminAPI"

      x-multi-tenant:

        tenant\_source: "header:X-Tenant-Id"

      security:

        \- BearerAuth: \[\]

      parameters:

        \- $ref: "\#/components/parameters/ApiVersionHeader"

        \- $ref: "\#/components/parameters/TenantHeader"

        \- name: page

          in: query

          required: false

          schema:

            type: integer

            minimum: 1

            default: 1

        \- name: per\_page

          in: query

          required: false

          schema:

            type: integer

            minimum: 1

            maximum: 200

            default: 50

      responses:

        "200":

          description: "List of users."

          content:

            application/json:

              schema:

                $ref: "\#/components/schemas/UserListResponse"

        "401":

          description: "Unauthorized."

          content:

            application/json:

              schema:

                $ref: "\#/components/schemas/ErrorResponse"

        "403":

          description: "Forbidden. Caller lacks required permissions."

          content:

            application/json:

              schema:

                $ref: "\#/components/schemas/ErrorResponse"

        "500":

          description: "Unexpected server error."

          content:

            application/json:

              schema:

                $ref: "\#/components/schemas/ErrorResponse"\\n  /v1/users/{user\_id}:

    get:

      summary: "Get user details"

      description: "Retrieve details about a specific user within a tenant."

      operationId: "getUser"

      tags:

        \- "Users"

      x-surface: "IdentityAdminAPI"

      x-multi-tenant:

        tenant\_source: "header:X-Tenant-Id"

      security:

        \- BearerAuth: \[\]

      parameters:

        \- $ref: "\#/components/parameters/ApiVersionHeader"

        \- $ref: "\#/components/parameters/TenantHeader"

        \- name: user\_id

          in: path

          required: true

          schema:

            type: string

      responses:

        "200":

          description: "User found."

          content:

            application/json:

              schema:

                $ref: "\#/components/schemas/User"

        "401":

          description: "Unauthorized."

          content:

            application/json:

              schema:

                $ref: "\#/components/schemas/ErrorResponse"

        "403":

          description: "Forbidden."

          content:

            application/json:

              schema:

                $ref: "\#/components/schemas/ErrorResponse"

        "404":

          description: "User not found."

          content:

            application/json:

              schema:

                $ref: "\#/components/schemas/ErrorResponse"

        "500":

          description: "Unexpected server error."

          content:

            application/json:

              schema:

                $ref: "\#/components/schemas/ErrorResponse"\\ncomponents:

  securitySchemes:

    BearerAuth:

      type: http

      scheme: bearer

      bearerFormat: "JWT"\\n  parameters:

    ApiVersionHeader:

      name: "X-API-Version"

      in: header

      required: false

      description: \>

        Optional version header used for contract version negotiation.

        If omitted, the default version configured by the server is used.

      schema:

        type: string

        example: "1.0"\\n    TenantHeader:

      name: "X-Tenant-Id"

      in: header

      required: true

      description: "Identifier of the tenant in a multi-tenant environment."

      schema:

        type: string

        example: "tenant-1234"\\n  schemas:

    LoginRequest:

      type: object

      required:

        \- username

        \- password

      properties:

        username:

          type: string

          description: "Username or email address used for login."

        password:

          type: string

          format: password

          description: "User password."

        mfa\_code:

          type: string

          nullable: true

          description: "Optional MFA code if required for login."

        metadata:

          type: object

          additionalProperties: true

          description: "Additional metadata (e.g. device info)."\\n    LoginResponse:

      type: object

      required:

        \- access\_token

        \- token\_type

        \- expires\_in

      properties:

        access\_token:

          type: string

          description: "Access token to be used in Authorization header."

        token\_type:

          type: string

          description: "Token type."

          example: "Bearer"

        expires\_in:

          type: integer

          description: "Time in seconds until the token expires."

          example: 3600

        refresh\_token:

          type: string

          nullable: true

          description: "Refresh token if refresh flows are enabled."

        scope:

          type: string

          nullable: true

          description: "Optional scope string describing granted permissions."\\n    User:

      type: object

      required:

        \- id

        \- email

        \- status

      properties:

        id:

          type: string

          description: "User identifier."

        email:

          type: string

          format: email

          description: "Primary email address."

        display\_name:

          type: string

          nullable: true

          description: "User display name."

        status:

          type: string

          description: "User status."

          enum:

            \- "active"

            \- "pending\_verification"

            \- "disabled"

        roles:

          type: array

          items:

            type: string

          description: "Roles assigned to the user."\\n    UserListResponse:

      type: object

      required:

        \- items

        \- page

        \- per\_page

        \- total

      properties:

        items:

          type: array

          items:

            $ref: "\#/components/schemas/User"

        page:

          type: integer

          description: "Current page number."

        per\_page:

          type: integer

          description: "Number of items per page."

        total:

          type: integer

          description: "Total number of users that match the criteria."\\n    ErrorResponse:

      type: object

      required:

        \- error

      properties:

        error:

          type: object

          required:

            \- code

            \- message

          properties:

            code:

              type: string

              description: "Machine-readable error code."

              example: "INVALID\_CREDENTIALS"

            message:

              type: string

              description: "Human-readable error message."

            details:

              type: object

              additionalProperties: true

              description: "Additional error details if available."\\nThis gives:

* A **fully valid** OpenAPI 3.0.3 example.

* Clear patterns for:

  * x-surface (public vs admin).

  * Multi-tenant header (X-Tenant-Id).

  * Versioning header (X-API-Version).

  * Error contract and auth.

Real cells will replace openapi.yaml with their own spec, but keep this style.

Good, let’s make contract-index.yaml the “table of contents” for all contracts of the Identity Cell, **as if it were a real cell**, not a toy.

This file lives at:

cells/cell\_tpl/knowledge/definitions/contracts/contract-index.yaml\\nBelow is the **complete content** you can use.

---

api\_version: "axioms.erparom.dev/contracts-index.v1alpha1"\\nmetadata:

  cell\_id: "identity"

  cell\_name: "Identity Cell"

  version: "1.2.0"

  last\_updated: "2025-12-05"

  description: \>

    Index of all contracts exposed or consumed by the Identity Cell, including RPC, events,

    policy and observability contracts. All file paths are relative to the Cell's

    knowledge/ root directory.\\nrpc:

  provides:

    \- id: "IdentityPublicAPI"

      name: "Identity Public API"

      description: "Public RPC surface for login, logout and token operations."

      file: "definitions/contracts/rpc/openapi.yaml"

      surface: "public"

      auth\_required: true

      protocols:

        \- "https+json"

      operations:

        \- operation\_id: "login"

          summary: "User login with credentials and optional MFA."

          path: "/v1/login"

          method: "POST"

        \- operation\_id: "logout"

          summary: "User logout, invalidating access tokens or sessions."

          path: "/v1/logout"

          method: "POST"

      versioning:

        strategy: "header"

        header: "X-API-Version"

        default\_version: "1.0"

        notes: "Clients may omit the header to use the default version; additional versions must remain backward-compatible."\\n    \- id: "IdentityAdminAPI"

      name: "Identity Admin API"

      description: "Administrative RPC surface for managing users, roles and permissions."

      file: "definitions/contracts/rpc/openapi.yaml"

      surface: "internal"

      auth\_required: true

      protocols:

        \- "https+json"

      operations:

        \- operation\_id: "listUsers"

          summary: "List users for a tenant."

          path: "/v1/users"

          method: "GET"

        \- operation\_id: "getUser"

          summary: "Get details of a specific user."

          path: "/v1/users/{user\_id}"

          method: "GET"

      versioning:

        strategy: "header"

        header: "X-API-Version"

        default\_version: "1.0"\\n  consumes:

    \- id: "BillingAPI"

      name: "Billing API"

      description: "Internal RPC API exposed by the Billing Cell and consumed for subscription-aware identity features."

      cell\_id: "billing"

      file: "../billing/knowledge/definitions/contracts/rpc/openapi.yaml"

      surface: "internal"

      auth\_required: true

      protocols:

        \- "https+json"

      version\_constraints:

        min\_version: "1.0.0"

        max\_version: "2.0.0"

      notes: "Used to validate billing status for certain identity capabilities; core authentication must not depend on this API being available."\\nevents:

  publishes:

    \- id: "UserRegistered"

      name: "User registered"

      description: "Emitted when a new user is registered within a tenant."

      topic: "identity.user.registered"

      file: "definitions/contracts/events/user\_registered.asyncapi.yaml"

      message\_ref: "\#/components/messages/UserRegistered"

      delivery\_semantics: "at-least-once"

      key\_fields:

        \- "headers.event\_id"

        \- "headers.tenant\_id"

      notes: "Subscribers must treat this event as idempotent based on event\_id."\\n    \- id: "UserPasswordChanged"

      name: "User password changed"

      description: "Emitted when a user changes or resets their password."

      topic: "identity.user.password.changed"

      file: "definitions/contracts/events/user\_password\_changed.asyncapi.yaml"

      message\_ref: "\#/components/messages/UserPasswordChanged"

      delivery\_semantics: "at-least-once"

      key\_fields:

        \- "headers.event\_id"

        \- "headers.tenant\_id"

      notes: "Intended for audit and notifications; payload must not contain raw credentials."\\n  subscribes:

    \- id: "PaymentCompleted"

      name: "Payment completed"

      description: "Billing event consumed to enable or adjust identity-related entitlements."

      topic: "billing.payment.completed"

      cell\_id: "billing"

      file: "../billing/knowledge/definitions/contracts/events/payment\_completed.asyncapi.yaml"

      message\_ref: "\#/components/messages/PaymentCompleted"

      delivery\_semantics: "at-least-once"

      notes: "Used only for enrichment and entitlement decisions; must not block core authentication when unavailable."\\npolicy:

  modules:

    \- id: "AUTHZ\_MAIN"

      name: "Primary authorization policy"

      description: "Authorization policy that decides whether a subject may perform an action on a resource within a tenant."

      category: "authorization"

      engine: "opa-rego"

      file: "definitions/contracts/policy/authorization.rego"

      entrypoint: "data.identity.authz.allow"

      input\_schema\_ref: "definitions/contracts/policy/policy\_contract.yaml\#/schemas/authz/input"

      output\_schema\_ref: "definitions/contracts/policy/policy\_contract.yaml\#/schemas/authz/output"

      notes: "Enforced on all protected RPC operations and certain internal workflows."\\n    \- id: "RATE\_LIMIT\_MAIN"

      name: "Primary rate limiting policy"

      description: "Rate limiting configuration governing login and token operations."

      category: "rate-limit"

      engine: "config+engine"

      file: "definitions/contracts/policy/rate\_limits.yaml"

      input\_schema\_ref: "definitions/contracts/policy/policy\_contract.yaml\#/schemas/rate\_limit/input"

      output\_schema\_ref: "definitions/contracts/policy/policy\_contract.yaml\#/schemas/rate\_limit/output"

      notes: "Evaluated for high-risk operations such as login and token refresh."\\nobservability:

  health:

    id: "HealthEndpoints"

    name: "Health, readiness and liveness endpoints"

    description: "HTTP endpoints used by infrastructure and CTK to assess Cell liveness, readiness and aggregated health."

    file: "definitions/contracts/observability/health\_endpoints.md"

    endpoints:

      \- path: "/live"

        method: "GET"

        purpose: "Liveness probe."

      \- path: "/ready"

        method: "GET"

        purpose: "Readiness probe."

      \- path: "/health"

        method: "GET"

        purpose: "Aggregated health."\\n  logs:

    id: "LogsSchema"

    name: "Structured log schema"

    description: "Canonical schema for structured logs emitted by the Cell."

    schema\_file: "definitions/contracts/observability/logs.schema.yaml"

    catalog\_file: "definitions/telemetry/log\_events.yaml"

    notes: "Event codes and their semantics are defined in the log events catalog."\\n  metrics:

    id: "MetricsSchema"

    name: "Metrics schema"

    description: "Canonical schema for metric samples emitted by the Cell."

    schema\_file: "definitions/contracts/observability/metrics.schema.yaml"

    catalog\_file: "definitions/telemetry/metrics\_catalog.yaml"

    notes: "Metric names, units and attributes are defined in the metrics catalog."\\n  traces:

    id: "TracesSchema"

    name: "Trace span schema"

    description: "Canonical schema for trace spans emitted by the Cell."

    schema\_file: "definitions/contracts/observability/traces.schema.yaml"

    catalog\_file: "definitions/telemetry/trace\_spans.yaml"

    notes: "Canonical span names and attributes are defined in the trace spans catalog."\\nThis gives you:

* One **central index** for:

  * All RPC contracts (provided \+ consumed).

  * All event contracts (publish \+ subscribe).

  * All policy modules.

  * All observability contracts.

* All paths are **knowledge-root–relative**, consistent with manifest.yaml.knowledge\_paths.

* Nothing is “TBD” or half-empty; every entry has a concrete description and real-looking structure, but is still reusable as a template for other cells.

Perfect, vamos a aterrizar estos tres archivos como artefactos serios del *fitness space* de la célula.

Te doy para cada uno:

* Qué problema resuelve / alcance.

* Principios de diseño (para no repetir cosas de manifest / Axx).

* Un **YAML completo** para cell\_tpl usando el contexto de la Identity Cell.

---

## **1\. sla-slo.yaml** {#1.-sla-slo.yaml}

### **Rol y alcance**

**Propósito:**  
 Definir las **SLOs (y SLAs si aplica)** de la célula por entorno y superficie, de forma declarativa y trazable hacia:

* métricas reales (vía metrics\_catalog.yaml / metrics.schema.yaml),

* axiomas (A09, A10, A21, A24, A25, A26, etc.),

* y posteriormente dashboards / alertas.

**No hace:**

* No define suites de tests (eso es suites.yaml).

* No define umbrales de CI (eso es thresholds.yaml).

* No repite qué axiomas son bloqueantes (eso está en manifest.yaml).

Piensa en sla-slo.yaml como: “**qué calidad prometo / apunto**”.

### **Ejemplo completo: cells/cell\_tpl/knowledge/definitions/fitness/sla-slo.yaml**

api\_version: "axioms.erparom.dev/fitness-sla-slo.v1alpha1"

kind: "SlaSloProfile"\\nmetadata:

  cell\_id: "identity"

  name: "Identity Cell SLA/SLO Profile"

  version: "1.0.0"

  owner\_team: "platform-identity"

  description: \>

    Declares service-level objectives (and, where applicable, SLAs) for the

    Identity Cell across environments and surfaces. These targets are used as

    reference for monitoring, alerting and fitness function thresholds.\\ndefaults:

  window: "P30D"                    \# ISO-8601 duration for rolling windows

  error\_budget\_policy: "standard"   \# purely descriptive, interpreted by SRE processes

  time\_zone: "UTC"\\nenvironments:

  \- name: "prod"

    description: "Production environment for end-users and tenant workloads."\\n    slas:

      \- id: "prod-public-api-availability-sla"

        description: "Contractual monthly availability commitment for the public Identity API."

        slo\_ref: "prod-public-api-availability"

        target: "99.9"              \# percentage, same as SLO objective but marked as contractual

        penalty\_policy: "see-master-service-agreement"

        notes: \>

          This SLA is only applicable to paying tenants under a commercial

          agreement. Breaches are evaluated monthly and may trigger credits

          according to legal terms, not by CTK.\\n    slos:

      \- id: "prod-public-api-availability"

        surface: "public-api"

        category: "availability"

        objective: 99.9              \# percent

        unit: "percent"

        window: "P30D"

        indicator:

          type: "metric"

          telemetry\_reference: "http\_requests\_total"

          good\_label\_filter: "code \< 500"

          total\_label\_filter: "path \=\~ '^/v1/'"

          aggregation: "monthly-rolling-availability"

        related\_axioms:

          \- "A09"

          \- "A22"

          \- "A25"

          \- "A26"

        notes: \>

          Production SLO for HTTP-level availability of public Identity APIs

          for all tenants, excluding planned maintenance windows.\\n      \- id: "prod-public-api-latency-p95"

        surface: "public-api"

        category: "latency"

        objective: 0.300              \# seconds

        unit: "seconds"

        window: "P7D"

        indicator:

          type: "metric"

          telemetry\_reference: "http\_server\_request\_duration\_seconds"

          statistic: "p95"

          label\_filter: "path \=\~ '^/v1/' AND method IN \['GET','POST'\]"

          aggregation: "rolling-window"

        related\_axioms:

          \- "A09"

          \- "A10"

          \- "A25"

          \- "A26"

        notes: \>

          Latency SLO for the 95th percentile of successful public API calls.\\n      \- id: "prod-auth-success-rate"

        surface: "public-api"

        category: "error\_rate"

        objective: 99.0               \# percent of successful auth attempts

        unit: "percent"

        window: "P7D"

        indicator:

          type: "metric"

          telemetry\_reference: "identity\_auth\_attempts\_total"

          good\_label\_filter: "outcome \== 'success'"

          total\_label\_filter: "tenant\_type \!= 'internal'"

          aggregation: "rolling-window"

        related\_axioms:

          \- "A08"

          \- "A21"

          \- "A25"

        notes: \>

          Measures the success rate of authentication attempts excluding

          internal health probes and synthetic tests.\\n      \- id: "prod-audit-log-ingestion-lag"

        surface: "audit-stream"

        category: "freshness"

        objective: 60                  \# seconds of maximum acceptable lag

        unit: "seconds"

        window: "PT1H"

        indicator:

          type: "metric"

          telemetry\_reference: "identity\_audit\_event\_lag\_seconds"

          statistic: "p99"

          label\_filter: "event\_stream \== 'primary'"

          aggregation: "rolling-window"

        related\_axioms:

          \- "A21"

          \- "A24"

          \- "A25"

        notes: \>

          Ensures audit logs are ingested and available within a bounded delay.\\n  \- name: "staging"

    description: "Pre-production environment used for integration and pre-release validation."\\n    slas: \[\]   \# no formal SLAs in staging\\n    slos:

      \- id: "staging-public-api-availability"

        surface: "public-api"

        category: "availability"

        objective: 99.0

        unit: "percent"

        window: "P7D"

        indicator:

          type: "metric"

          telemetry\_reference: "http\_requests\_total"

          good\_label\_filter: "code \< 500"

          total\_label\_filter: "path \=\~ '^/v1/'"

          aggregation: "rolling-window"

        related\_axioms:

          \- "A09"

          \- "A25"

        notes: \>

          Staging environment has a relaxed availability SLO as it is subject

          to more frequent deployments and experiments.\\n  \- name: "dev"

    description: "Development environment. SLOs are best-effort and non-binding."\\n    slas: \[\]   \# not applicable\\n    slos:

      \- id: "dev-basic-health"

        surface: "dev-cluster"

        category: "availability"

        objective: 95.0

        unit: "percent"

        window: "P7D"

        indicator:

          type: "metric"

          telemetry\_reference: "identity\_cell\_health\_up"

          good\_label\_filter: "value \== 1"

          total\_label\_filter: ""

          aggregation: "rolling-window"

        related\_axioms:

          \- "A09"

          \- "A25"

        notes: \>

          Basic liveness for development clusters; used mostly for sanity checks.\\n

---

## **2\. suites.yaml** {#2.-suites.yaml}

### **Rol y alcance**

**Propósito:**  
 Catálogo canónico de **suites de fitness / pruebas** de la célula:

* Qué suites existen (ci\_minimal, ci\_full, pre\_release, nightly\_resilience, etc.).

* Para qué sirven (intento, alcance).

* Cuándo suelen ejecutarse (disparadores típicos).

**No hace:**

* No decide qué axiomas son bloqueantes ⇢ eso ya está en manifest.yaml (axioms.enforcement\_profile.gating).

* No vuelve a listar qué Axx o fitness IDs pertenecen a cada suite ⇢ esa info vive en cada Axx\_\*.yaml (suites: \[...\]).

Piensa en suites.yaml como el **“catálogo oficial de nombres”** que usan manifest, Axx y CI.

### **Ejemplo completo: cells/cell\_tpl/knowledge/definitions/fitness/suites.yaml**

api\_version: "axioms.erparom.dev/fitness-suites.v1alpha1"

kind: "FitnessSuiteCatalog"\\nmetadata:

  cell\_id: "identity"

  name: "Identity Cell Fitness Suites"

  version: "1.0.0"

  owner\_team: "platform-identity"

  description: \>

    Canonical catalog of fitness suites for the Identity Cell. Each suite

    groups a set of fitness functions and tests, and may be referenced from

    manifest.yaml for gating policies and CI pipelines.\\nsuites:

  \- id: "ci\_minimal"

    display\_name: "CI Minimal"

    intent: "fast\_sanity"

    description: \>

      Fast sanity suite for every push and pull request. Runs a small but

      critical subset of fitness functions covering core Axioms (independence,

      contracts, idempotency, resource bounds, timeouts, tracing, policy

      externalization, least privilege, auditability, observability baseline,

      standard telemetry, and testability).

    recommended\_triggers:

      \- "pull\_request"

      \- "push\_to\_feature\_branch"

      \- "push\_to\_main"

    typical\_runtime\_minutes: 10

    includes:

      categories:

        \- "axioms-core"

        \- "static-analysis"

        \- "contract-validation"

        \- "fast-unit-and-integration"

    notes: \>

      This suite is expected to be stable and fast. New fitness functions

      should only be added here if they do not significantly increase runtime.\\n  \- id: "ci\_full"

    display\_name: "CI Full"

    intent: "full\_regression"

    description: \>

      Comprehensive regression suite executed on main and before releasing.

      Covers all Axioms A01–A31 with their associated fitness functions,

      including heavier integration, contract and load tests.

    recommended\_triggers:

      \- "nightly\_on\_main"

      \- "manual\_on\_demand"

      \- "pre\_release\_candidate"

    typical\_runtime\_minutes: 60

    includes:

      categories:

        \- "axioms-all"

        \- "integration"

        \- "contract-tests"

        \- "load-and-performance"

        \- "security-scans"

    notes: \>

      This suite can be used as a gate for promotion from staging to production

      as defined in manifest.yaml. Runtime is longer but provides high

      confidence in overall architectural conformance.\\n  \- id: "pre\_release"

    display\_name: "Pre-release Verification"

    intent: "release\_validation"

    description: \>

      Focused verification suite to run immediately before a production

      deployment. Validates key Axioms related to backward compatibility,

      contract evolution, failure modes, recovery procedures, data management,

      governance, and knowledge plane completeness.

    recommended\_triggers:

      \- "pre\_release\_candidate"

      \- "pre\_prod\_deployment"

    typical\_runtime\_minutes: 30

    includes:

      categories:

        \- "release-critical-axioms"

        \- "backward-compatibility"

        \- "contract-evolution"

        \- "resilience-and-recovery"

        \- "governance-and-knowledge-plane"

    notes: \>

      Intended for use as the final gate before production rollout. Can be run

      against staging or a production shadow environment.\\n  \- id: "nightly\_resilience"

    display\_name: "Nightly Resilience & Chaos"

    intent: "resilience"

    description: \>

      Nightly suite focusing on resilience, chaos experiments, and long-running

      behavior of the Identity Cell. Validates graceful degradation,

      failure modes, recovery procedures, and resource bounds under stress.

    recommended\_triggers:

      \- "nightly\_on\_main"

      \- "scheduled\_weekend\_runs"

    typical\_runtime\_minutes: 90

    includes:

      categories:

        \- "chaos"

        \- "resilience"

        \- "long-running"

        \- "resource-heavy"

    notes: \>

      This suite is usually non-blocking for daily development flow but

      provides valuable evidence for resilience-related Axioms. Failures

      should trigger investigation and updates to thresholds and runbooks.\\n  \- id: "security\_weekly"

    display\_name: "Weekly Security & Vulnerability Scan"

    intent: "security"

    description: \>

      Weekly suite focused on security-related fitness functions, including

      dependency and image scanning, policy evaluation, least-privilege checks,

      and secure communications validation.

    recommended\_triggers:

      \- "weekly\_scheduled"

    typical\_runtime\_minutes: 45

    includes:

      categories:

        \- "security-scans"

        \- "policy-validation"

        \- "secrets-and-identity"

    notes: \>

      Failures in this suite must be triaged promptly. Some findings may be

      allowed with temporary waivers tracked in governance/risk\_register.yaml.\\n

---

## **3\. thresholds.yaml** {#3.-thresholds.yaml}

### **Rol y alcance**

**Propósito:**  
 Definir los **umbrales cuantitativos** que usan las fitness functions para decidir *pass/fail*:

* Límite de p95 de latencia en tests de carga.

* Máxima tasa de error permitida en una suite.

* Bounds de consumo de recursos (CPU, memoria) para A09.

* etc.

**No hace:**

* No re-declara SLOs ⇢ eso está en sla-slo.yaml.

* No dice qué axiomas son bloqueantes ⇢ eso está en manifest.yaml.

* No re-enlista qué fitness functions existen ⇢ viven en los Axx\_\*.yaml.

En la práctica:

* Cada definición en thresholds.yaml se asocia a:

  * un fitness\_id (definido en el YAML de algún Axiom),

  * y/o un slo\_ref (id de SLO en sla-slo.yaml),

  * y declara valores numéricos específicos por entorno y suite.

### **Ejemplo completo: cells/cell\_tpl/knowledge/definitions/fitness/thresholds.yaml**

api\_version: "axioms.erparom.dev/fitness-thresholds.v1alpha1"

kind: "FitnessThresholdProfile"\\nmetadata:

  cell\_id: "identity"

  name: "Identity Cell Fitness Thresholds"

  version: "1.0.0"

  owner\_team: "platform-identity"

  description: \>

    Quantitative thresholds used by fitness functions when evaluating Axioms

    for the Identity Cell. These thresholds are environment- and suite-aware

    and are derived from, or aligned with, declared SLOs where applicable.\\ndefaults:

  comparison\_operator: "\<="         \# default operator when omitted

  unit\_latency: "seconds"

  unit\_rate: "percent"

  unit\_error\_budget\_burn: "ratio"\\nenvironments:

  \- name: "prod"

    description: "Thresholds for production-like tests and validations."\\n    thresholds:

      \- id: "ff\_latency\_public\_api\_ci\_full"

        fitness\_id: "FF-LATENCY-PUBLIC-API"

        slo\_ref: "prod-public-api-latency-p95"

        suites:

          \- "ci\_full"

          \- "pre\_release"

        metric:

          telemetry\_reference: "http\_server\_request\_duration\_seconds"

          statistic: "p95"

          operator: "\<="

          value: 0.35              \# seconds, slightly relaxed vs SLO (0.30s)

          unit: "seconds"

        allowed\_flakiness:

          max\_runs\_above\_threshold: 1

          observation\_window\_runs: 5

        notes: \>

          CI and pre-release load tests allow a small margin above the SLO, as

          synthetic traffic patterns may differ from real-world traffic.\\n      \- id: "ff\_availability\_public\_api\_ci\_full"

        fitness\_id: "FF-AVAILABILITY-PUBLIC-API"

        slo\_ref: "prod-public-api-availability"

        suites:

          \- "ci\_full"

          \- "pre\_release"

        metric:

          telemetry\_reference: "http\_availability\_ratio"

          statistic: "min"

          operator: "\>="

          value: 99.5

          unit: "percent"

        allowed\_flakiness:

          max\_runs\_below\_threshold: 0

          observation\_window\_runs: 3

        notes: \>

          For pre-release validation we require a minimum availability of 99.5%

          in test scenarios derived from production traffic patterns.\\n      \- id: "ff\_error\_rate\_auth\_ci\_minimal"

        fitness\_id: "FF-AUTH-ERROR-RATE"

        slo\_ref: "prod-auth-success-rate"

        suites:

          \- "ci\_minimal"

        metric:

          telemetry\_reference: "identity\_auth\_attempts\_error\_ratio"

          statistic: "max"

          operator: "\<="

          value: 1.0

          unit: "percent"

        allowed\_flakiness:

          max\_runs\_above\_threshold: 0

          observation\_window\_runs: 10

        notes: \>

          Even in fast CI checks we expect a very low error ratio for basic

          authentication flows.\\n      \- id: "ff\_resource\_usage\_bounded\_nightly"

        fitness\_id: "FF-BOUNDED-RESOURCES"

        suites:

          \- "nightly\_resilience"

        metric:

          telemetry\_reference: "identity\_cell\_cpu\_utilization\_ratio"

          statistic: "p99"

          operator: "\<="

          value: 0.85

          unit: "ratio"

        additional\_metrics:

          \- telemetry\_reference: "identity\_cell\_memory\_utilization\_ratio"

            statistic: "p99"

            operator: "\<="

            value: 0.90

            unit: "ratio"

        notes: \>

          Ensures that under stress and chaos scenarios, CPU and memory usage

          remain bounded and do not approach saturation over the duration of

          the nightly resilience suite.\\n      \- id: "ff\_audit\_log\_lag\_nightly"

        fitness\_id: "FF-AUDIT-LOG-LAG"

        slo\_ref: "prod-audit-log-ingestion-lag"

        suites:

          \- "nightly\_resilience"

        metric:

          telemetry\_reference: "identity\_audit\_event\_lag\_seconds"

          statistic: "p99"

          operator: "\<="

          value: 90.0

          unit: "seconds"

        notes: \>

          Nightly suites verify that audit log ingestion lag does not exceed

          90 seconds in worst cases, aligned with but slightly relaxed from

          the SLO (60 seconds).\\n  \- name: "staging"

    description: "Thresholds for staging environment tests."\\n    thresholds:

      \- id: "ff\_latency\_public\_api\_staging\_ci\_full"

        fitness\_id: "FF-LATENCY-PUBLIC-API"

        slo\_ref: "staging-public-api-availability"

        suites:

          \- "ci\_full"

        metric:

          telemetry\_reference: "http\_server\_request\_duration\_seconds"

          statistic: "p95"

          operator: "\<="

          value: 0.50

          unit: "seconds"

        notes: \>

          Staging thresholds are more relaxed than production, as staging

          clusters may have different sizing and more experimental workloads.\\n  \- name: "dev"

    description: "Thresholds for development environment tests."\\n    thresholds:

      \- id: "ff\_basic\_health\_dev\_ci\_minimal"

        fitness\_id: "FF-BASIC-HEALTH-DEV"

        suites:

          \- "ci\_minimal"

        metric:

          telemetry\_reference: "identity\_cell\_health\_up\_ratio"

          statistic: "min"

          operator: "\>="

          value: 90.0

          unit: "percent"

        notes: \>

          Development clusters are allowed to be less stable, but basic

          health checks must still pass most of the time to avoid developer

          frustration.\\n

---

Si te parece bien esta separación:

* sla-slo.yaml \= **qué quiero** del servicio.

* suites.yaml \= **cómo agrupo** las comprobaciones.

* thresholds.yaml \= **números concretos** que las fitness usan en cada suite/entorno.

el siguiente paso natural sería definir el **schema tipo** de un Axx\_\*.yaml para que veas cómo se referencia todo esto (fitness\_id, suites, evidence esperada, etc.) de manera coherente.

Nice, we’re finally at the “sharp instruments” layer of AXIOMS 😈

Since you said “one by one”, I’ll lock in the **canonical schema** for all Axx\_\*.yaml and then give you a **fully populated A01\_cell\_independence.yaml** as if it were the real Identity Cell.

---

## **1\. Canonical structure for fitness/axioms/Axx\_\*.yaml** {#1.-canonical-structure-for-fitness/axioms/axx_*.yaml}

All per-axiom fitness files share the same shape:

api\_version: string

kind: string\\nmetadata:

  axiom\_id: string           \# "A01"..."A31"

  axiom\_name: string         \# machine-ish name, e.g. "cell\_independence"

  cell\_id: string            \# "identity", "billing", or "cell\_tpl" in template

  description: string        \# short description of how this axiom applies here

  owner\_team: string         \# responsible team

  version: string            \# schema/content version of THIS file

  tags:                      \# optional

    \- string\\naxiom:

  summary: string            \# 1–2 line statement of the axiom in this cell

  rationale: string          \# why it matters here, in this domain

  planes:                    \# which planes this axiom touches here

    \- data

    \- control

    \- knowledge

  axes:                      \# which architectural axes it primarily lives on

    \- topology

    \- communication

    \- dependency\_direction

  related\_axioms:            \# cross-links, just IDs

    \- "A02"

    \- "A05"

  notes: string              \# optional extra context\\ninvariants:

  \- id: string               \# e.g. "A01-INV-01"

    description: string      \# concrete property that MUST hold

    planes:                  \# subset of \["data","control","knowledge"\]

      \- data

      \- control

    category: string         \# e.g. "topology", "deployment", "runtime\_isolation"

    relates\_to\_axes:         \# subset of \["topology","communication","dependency\_direction"\]

      \- topology

    relates\_to\_quality:      \# e.g. \["independence","resilience","governance"\]

      \- independence

    verification\_strategy:   \# "static\_analysis" | "integration\_test" | "runtime\_monitoring" | "chaos\_experiment" | "manual\_review"

    comments: string         \# optional nuance / caveats\\nfitness\_functions:

  \- id: string               \# must match thresholds.fitness\_thresholds\[\*\].fitness\_id

    name: string             \# humanish short name

    description: string      \# what this FF does in practice

    implements\_invariants:   \# ids from invariants\[\]

      \- string

    type: string             \# same enum as verification\_strategy (or compatible)

    planes:                  \# which planes this FF observes/tests

      \- data

      \- control

    environments:            \# where it normally runs

      \- dev

      \- ci

      \- staging

      \- prod

    suites:                  \# must match entries in fitness/suites.yaml

      \- ci\_minimal

      \- ci\_full

    input\_artifacts:         \# what this FF reads

      \- kind: string         \# "knowledge\_file" | "config\_file" | "source\_tree" | "deployment\_descriptor" | "telemetry\_stream"

        path: string         \# path or identifier, relative to /knowledge or repo root

        description: string

    output\_artifacts:        \# what this FF produces

      \- kind: string         \# "conformance\_fragment" | "metric" | "log" | "report"

        path: string         \# usually under evidence/

        description: string

    pass\_criteria:           \# logical link to thresholds.yaml; no numbers here

      threshold\_id: string   \# id from fitness/thresholds.yaml

      interpretation: string \# human explanation of what “passing” means

    notes: string            \# optional\\n**Important:**

* **No gating, no severity, no expected\_evidence here**: those live in knowledge/manifest.yaml and fitness/thresholds.yaml / fitness/suites.yaml. This keeps each file single-purpose: *“what invariants \+ how do we test them for this Axiom in this Cell”*.

---

Got it. Let’s treat A01 like a *mini RFC chapter* and not just “yet another YAML”. I’ll structure this so you can literally drop the prose into **Appendix A** and the YAML into cells/cell\_tpl/knowledge/definitions/fitness/axioms/A01\_cell\_independence.yaml.

---

# **A01 – Cell Independence** {#a01-–-cell-independence}

**File:** knowledge/definitions/fitness/axioms/A01\_cell\_independence.yaml

---

## **1\. Purpose of this file** {#1.-purpose-of-this-file}

A01 (“Cell independence”) is one of the most fundamental AXIOMS:

*Each Cell must be independently buildable, deployable, and evolvable. All coupling to other Cells must be mediated through explicit contracts.*

This file is the **formal, machine-readable description of how this particular Cell implements and tests A01**. It answers three questions very precisely:

1. **What does “Cell independence” mean *for this Cell*?**  
    Not in abstract, but concretely for Identity/Billing/whatever Cell we’re in.

2. **Which invariants must always hold for A01 to be considered satisfied here?**  
    Things like “no direct source sharing”, “independent deployment possible”, “isolated runtime resources”, etc.

3. **Which fitness functions check those invariants, where do they run, and what artifacts do they produce?**  
    So CTK and humans know *how* A01 is enforced, not just that “A01 is important”.

This file is **not** where you declare:

* Whether A01 is *blocker / critical / warning* → that lives in knowledge/manifest.yaml under axioms.implementations.

* Which suites must pass for promotion (gating) → also in manifest.yaml \+ fitness/suites.yaml.

* The exact numeric thresholds (e.g. scores, limits) → those belong in fitness/thresholds.yaml.

Think of this as:

“The local *spec \+ test plan* of A01 for this Cell.”

---

## **2\. How A01’s fitness definition fits into the Knowledge Plane** {#2.-how-a01’s-fitness-definition-fits-into-the-knowledge-plane}

Within the knowledge/ tree:

* manifest.yaml says **A01 exists, is enforced, and is gating in certain suites**.

* fitness/suites.yaml says **which suites exist** (ci\_minimal, ci\_full, pre\_release, etc.).

* fitness/thresholds.yaml says **“for fitness function X, in environment Y, in suite Z, pass if metric \<= / \>= N”**.

* A01\_cell\_independence.yaml ties all together by:

  * Declaring **A01’s invariants** for this Cell.

  * Mapping **fitness functions** to those invariants.

  * Pointing at which **artifacts** they consume (contracts, deps, infra descriptors…) and emit (partial conformance fragments, metrics).

This gives CTK a clean pipeline:

1. Read manifest.yaml → see that A01 is enforced and gating.

2. Read fitness/axioms/A01\_cell\_independence.yaml → see *how* to evaluate A01.

3. Read fitness/suites.yaml → know which suites include these fitness functions.

4. Read fitness/thresholds.yaml → know what “pass” means numerically.

5. Execute tests, produce evidence under knowledge/evidence/.

---

## **3\. Conceptual architecture of the file** {#3.-conceptual-architecture-of-the-file}

The file has four main sections:

1. **Header & metadata** (api\_version, kind, metadata):

   * Declares that this is an **Axiom Fitness Definition** and binds it to A01 and to a specific cell\_id (identity in the example template).

   * Provides human metadata: description, owner team, version, tags.

2. **axiom block**:

   * Re-states the axiom **in this Cell’s terms** (summary, rationale).

   * Links to **planes** involved (data, control, knowledge).

   * Links to **architectural axes** involved (topology, dependency\_direction).

   * Cross-links related axioms (A02, A03, A05, etc.).

3. **invariants block**:

   * Breaks A01 down into **concrete properties that must always hold**.

   * Each invariant is minimal, crisp, and testable.

   * Specifies:

     * Which planes it belongs to.

     * Which axis and quality it relates to (independence, evolvability, operability…).

     * Its primary verification strategy (static analysis, integration test, config validation, etc.).

4. **fitness\_functions block**:

   * Each entry is a **first-class Fitness Function** that CTK or CI jobs can run.

   * Each function:

     * Implements one or more invariants.

     * Declares its type (static\_analysis, integration\_test, config\_validation).

     * States where it runs (environments, suites).

     * Lists **input artifacts** (knowledge files, config, source tree, deployment descriptors).

     * Lists **output artifacts** (partial conformance fragments, metrics files inside evidence/).

     * References an **ID in fitness/thresholds.yaml** that defines the numeric pass criteria.

By splitting into invariants \+ fitness functions, we separate:

* *“What must always be true”* (invariants)

* From *“How do we check it and where does it live in the toolchain”* (fitness functions)

---

## **4\. A01 – What does “Cell independence” actually mean here?** {#4.-a01-–-what-does-“cell-independence”-actually-mean-here?}

High-level A01 definition in AXIOMS:

“Each Cell must be independently buildable, deployable and evolvable, with coupling only via explicit contracts.”

For the Identity Cell (the example we use), we refine this into three core invariants:

1. **Build independence**

   * The Cell can be built and packaged **without** checking out or compiling other Cells’ source code.

   * Cross-Cell dependencies appear only as:

     * Versioned libraries / SDKs produced from other Cells’ contracts, or

     * Remote RPC / event contracts.

   * No monorepo-style “reach into other module’s internal code” is allowed.

2. **Deploy independence**

   * The Cell can be deployed, rolled forward, or rolled back **without** requiring simultaneous changes in other Cells, as long as contract compatibility (A12–A15) is preserved.

   * That implies:

     * No hidden runtime coupling that breaks if Identity is at version 1.2.0 and Billing at 1.0.0.

     * Contract compatibility is the only coupling axis.

3. **Runtime isolation**

   * At runtime, Identity uses isolated resources (processes, pods, DB/schema, queues) so that:

     * It can be restarted or rolled without disrupting other Cells.

     * It can be constrained and monitored separately.

   * This doesn’t forbid shared infra (same Postgres cluster, same RabbitMQ instance), but **logical isolation** (schema, logical queues, etc.) must be explicit.

These three invariants are exactly what we encode in:

* A01-INV-01-BUILD-INDEPENDENCE

* A01-INV-02-DEPLOY-INDEPENDENCE

* A01-INV-03-RUNTIME-ISOLATION

---

## **5\. How CTK / tooling uses this file** {#5.-how-ctk-/-tooling-uses-this-file}

**Typical flow:**

1. **CTK loads the A01 definition**:

   * Parses axiom for context (planes, axes, related axioms).

   * Reads invariants and fitness\_functions.

2. **CTK determines which functions to run**:

   * Based on the requested suite (e.g. ci\_full, pre\_release).

   * Uses fitness\_functions\[\*\].suites to decide which ones apply.

3. **CTK resolves inputs**:

   * For each function, it loads the declared input\_artifacts:

     * definitions/cell/cell.yaml, definitions/cell/dependencies.yaml, contract-index.yaml, infra descriptors, etc.

   * This is how it knows where to look for topology, dependencies, k8s manifests, etc.

4. **CTK executes the fitness functions**:

   * Could be:

     * Built-in analyzers.

     * Shell commands calling external tools.

     * Test suites (PHPUnit, Jest, Go tests…) orchestrated by CTK.

   * The FF implementation is outside this file; the file is *declarative wiring*.

5. **CTK writes outputs**:

   * Writes evidence/conformance/partials/...json with pass/fail \+ details.

   * Optionally writes metrics files for observability of architectural health.

6. **CTK evaluates thresholds**:

   * For each FF, it looks up pass\_criteria.threshold\_id in fitness/thresholds.yaml.

   * Applies numeric / logical rules to decide pass/fail for the FF and thus for A01.

7. **CTK summarizes into evidence/conformance/latest\_report.json**:

   * A01 shows as PASS / WARN / FAIL with links to partial evidence.

---

## **6\. Full example: A01\_cell\_independence.yaml** {#6.-full-example:-a01_cell_independence.yaml}

Now the concrete file for the template Identity Cell. You can use this *as is* under:

cells/cell\_tpl/knowledge/definitions/fitness/axioms/A01\_cell\_independence.yaml

api\_version: "axioms.erparom.dev/fitness-axiom.v1alpha1"

kind: "AxiomFitnessDefinition"\\nmetadata:

  axiom\_id: "A01"

  axiom\_name: "cell\_independence"

  cell\_id: "identity"

  description: \>

    Implementation of A01 (Cell independence) for the Identity Cell. Ensures that

    the Identity Cell can be built, deployed and evolved independently from

    other Cells, with explicit, contract-based boundaries.

  owner\_team: "platform-identity"

  version: "1.0.0"

  tags:

    \- "axiom:A01"

    \- "axis:topology"

    \- "axis:dependency\_direction"

    \- "plane:data"

    \- "plane:control"

    \- "plane:knowledge"\\naxiom:

  summary: \>

    The Identity Cell must be independently buildable, deployable and operable,

    with all cross-Cell interactions going through explicit contracts and

    without lock-step coupling to other Cells.

  rationale: \>

    Cell independence is required to scale the organization and reduce

    coordination overhead. Identity is a Tier-0 capability, so it must be

    upgradeable, recoverable and testable on its own without forcing changes

    in other Cells, as long as contract compatibility is preserved.

  planes:

    \- data

    \- control

    \- knowledge

  axes:

    \- topology

    \- dependency\_direction

  related\_axioms:

    \- "A02"    \# internal encapsulation

    \- "A03"    \# contract definition

    \- "A05"    \# acyclic dependencies

    \- "A12"    \# backward compatibility

    \- "A15"    \# contract evolution

  notes: \>

    In practice, A01 for Identity focuses on build topology, deployment

    independence and runtime isolation: separate build artifact, explicit

    contract dependencies, and the ability to roll Identity without coordinated

    deployments of other Cells.\\ninvariants:

  \- id: "A01-INV-01-BUILD-INDEPENDENCE"

    description: \>

      The Identity Cell can be built and packaged without checking out or

      compiling source code from other Cells. Cross-Cell reuse happens only

      via versioned libraries or remote contracts (RPC/events), never by

      sharing source trees.

    planes:

      \- knowledge

    category: "build\_topology"

    relates\_to\_axes:

      \- topology

      \- dependency\_direction

    relates\_to\_quality:

      \- independence

      \- evolvability

    verification\_strategy: "static\_analysis"

    comments: \>

      This invariant is enforced mainly by analyzing repository layout,

      dependency declarations and build pipelines to ensure that the Identity

      Cell can be built in isolation.\\n  \- id: "A01-INV-02-DEPLOY-INDEPENDENCE"

    description: \>

      The Identity Cell can be deployed, rolled forward or rolled back

      independently of other Cells. No other Cell must require a specific

      Identity runtime version to remain operational, as long as contract

      compatibility (A12–A15) holds.

    planes:

      \- control

      \- data

    category: "deployment\_topology"

    relates\_to\_axes:

      \- topology

      \- communication

    relates\_to\_quality:

      \- independence

      \- resilience

      \- operability

    verification\_strategy: "integration\_test"

    comments: \>

      Verified by CTK scenarios that deploy Identity in isolation or with

      mocked/stable neighbors and execute critical-path smoke tests.\\n  \- id: "A01-INV-03-RUNTIME-ISOLATION"

    description: \>

      The Identity Cell runs as an operationally isolated unit: its processes,

      pods and logical data stores are not shared with other Cells in a way

      that would require coordinated restarts or schema changes.

    planes:

      \- data

      \- control

    category: "runtime\_isolation"

    relates\_to\_axes:

      \- topology

    relates\_to\_quality:

      \- independence

      \- fault\_isolation

      \- security

    verification\_strategy: "config\_validation"

    comments: \>

      This invariant is enforced by validating deployment descriptors and

      data-plane configuration (separate DB schemas, queues and runtime

      resources) to avoid tight coupling at the infrastructure level.\\nfitness\_functions:

  \- id: "FF-A01-BUILD-INDEPENDENCE"

    name: "Build independence check"

    description: \>

      Static analysis of the repository layout and CI/CD configuration to

      ensure the Identity Cell can be built and packaged without pulling in

      other Cells' source trees, and that cross-Cell dependencies are expressed

      only as versioned libraries or remote contracts.

    implements\_invariants:

      \- "A01-INV-01-BUILD-INDEPENDENCE"

    type: "static\_analysis"

    planes:

      \- knowledge

    environments:

      \- dev

      \- ci

    suites:

      \- "ci\_minimal"

      \- "ci\_full"

    input\_artifacts:

      \- kind: "knowledge\_file"

        path: "definitions/cell/cell.yaml"

        description: "Declares Cell boundaries and ownership for topology checks."

      \- kind: "knowledge\_file"

        path: "definitions/cell/dependencies.yaml"

        description: "Declares upstream/downstream Cells and external systems."

      \- kind: "source\_tree"

        path: "."

        description: "Root of the Identity Cell repository."

      \- kind: "config\_file"

        path: ".github/workflows"

        description: "CI/CD pipeline configuration for build jobs."

    output\_artifacts:

      \- kind: "conformance\_fragment"

        path: "evidence/conformance/partials/A01\_build\_independence.json"

        description: "Per-FF report with violations and a normalized score."

      \- kind: "metric"

        path: "evidence/observability/metrics/fitness\_A01\_build\_independence.prom"

        description: "Metric export for dashboards showing build independence status."

    pass\_criteria:

      threshold\_id: "ff\_a01\_build\_independence"

      interpretation: \>

        Passes when the static analyzer reports no forbidden cross-Cell source

        dependencies and the independence score meets or exceeds the configured

        threshold defined in fitness/thresholds.yaml.

    notes: \>

      The analyzer is configured with patterns for internal Identity modules

      and allowed external SDKs, ensuring that only approved dependency

      mechanisms are used.\\n  \- id: "FF-A01-DEPLOY-INDEPENDENCE"

    name: "Deployment independence scenario"

    description: \>

      Integration scenario executed by CTK that deploys the Identity Cell in

      isolation (or alongside mocked/stable neighbors), then exercises a minimal

      set of critical operations (login, token issuance, basic profile read) to

      verify that Identity can be rolled independently.

    implements\_invariants:

      \- "A01-INV-02-DEPLOY-INDEPENDENCE"

    type: "integration\_test"

    planes:

      \- control

      \- data

    environments:

      \- ci

      \- staging

      \- preprod

    suites:

      \- "ci\_full"

      \- "pre\_release"

    input\_artifacts:

      \- kind: "deployment\_descriptor"

        path: "infra/k8s/identity"

        description: "Kubernetes manifests or Helm chart for the Identity Cell."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/contract-index.yaml"

        description: "Declares which RPC/events form the critical path to be exercised."

      \- kind: "knowledge\_file"

        path: "definitions/fitness/suites.yaml"

        description: "Suite catalog used to map this FF to release gates."

    output\_artifacts:

      \- kind: "conformance\_fragment"

        path: "evidence/conformance/partials/A01\_deploy\_independence.json"

        description: "Scenario results with pass/fail per critical operation."

      \- kind: "metric"

        path: "evidence/observability/metrics/fitness\_A01\_deploy\_independence.prom"

        description: "High-level SLI for deployment independence scenarios."

    pass\_criteria:

      threshold\_id: "ff\_a01\_deploy\_independence"

      interpretation: \>

        Passes when all critical-path operations succeed against the deployed

        Identity Cell in the scenario and the aggregate score meets or exceeds

        the threshold defined in fitness/thresholds.yaml.

    notes: \>

      This FF is typically used as a gate in the pre\_release suite before

      promoting the Identity Cell to production.\\n  \- id: "FF-A01-RUNTIME-ISOLATION"

    name: "Runtime isolation configuration check"

    description: \>

      Configuration validation that ensures the Identity Cell uses isolated

      runtime resources (dedicated DB/schema, queues, and pods) and does not

      share mutable infrastructure in ways that break Cell independence.

    implements\_invariants:

      \- "A01-INV-03-RUNTIME-ISOLATION"

    type: "config\_validation"

    planes:

      \- data

      \- control

    environments:

      \- ci

      \- staging

      \- prod

    suites:

      \- "ci\_full"

      \- "nightly\_resilience"

    input\_artifacts:

      \- kind: "config\_file"

        path: "config/database.yaml"

        description: "Database configuration, including schema and connection details."

      \- kind: "config\_file"

        path: "config/messaging.yaml"

        description: "Messaging/queue configuration, including topics/queues."

      \- kind: "knowledge\_file"

        path: "definitions/cell/cell.yaml"

        description: "Declares intended data ownership and Cell boundaries."

    output\_artifacts:

      \- kind: "conformance\_fragment"

        path: "evidence/conformance/partials/A01\_runtime\_isolation.json"

        description: "Violations and score for runtime isolation checks."

      \- kind: "metric"

        path: "evidence/observability/metrics/fitness\_A01\_runtime\_isolation.prom"

        description: "SLI for how well runtime isolation is being respected."

    pass\_criteria:

      threshold\_id: "ff\_a01\_runtime\_isolation"

      interpretation: \>

        Passes when no disallowed shared resources are detected and the score

        for isolation checks is at or above the configured threshold in

        fitness/thresholds.yaml.

    notes: \>

      This FF interacts closely with A24 (data management) and infrastructure

      configuration; it focuses specifically on topological isolation, not on

      backup/retention or telemetry quality.\\nIf this level of depth matches what you want for Appendix A, next we can give **A02** the same “thesis treatment”: purpose, semantics, invariants, FFs, and then full YAML.

Alright, let’s give A02 the deluxe treatment it deserves.

---

# **A02 – Internal Encapsulation** {#a02-–-internal-encapsulation}

**File:** knowledge/definitions/fitness/axioms/A02\_internal\_encapsulation.yaml

---

## **1\. Purpose of this file** {#1.-purpose-of-this-file-1}

A02 (Internal Encapsulation) captures a brutally simple but critical idea:

*The Cell’s internal models and persistence details must never leak across Cell boundaries. Only contract-defined DTOs and schemas are allowed to escape.*

This file is the **canonical, machine-readable description** of how this particular Cell (Identity in the template) implements and validates A02.

It answers:

1. **What does “internal encapsulation” *mean for this Cell*?**  
    Not the abstract principle, but concrete rules: what can and cannot leave the Cell boundary.

2. **Which invariants must always hold for A02 to be considered satisfied?**  
    Examples:

   * No domain entity types exposed in OpenAPI/AsyncAPI.

   * No DB tables/columns in contracts or external error messages.

   * No other Cell importing Identity’s internal domain/persistence modules.

   * Runtime payloads strictly follow external schemas, not internal entity shapes.

3. **Which fitness functions enforce these invariants, and how do they work?**

   * Which artifacts they inspect (contracts, code, configs).

   * Where they run (dev / CI / staging).

   * What evidence they produce.

What this file **does not** contain:

* Severity / gating (blocker vs warning, required suites) – that lives in knowledge/manifest.yaml.

* Numeric thresholds (e.g. how many “minor leaks” are tolerated) – those go into fitness/thresholds.yaml.

* The full test implementation – this file describes *what* must be checked and *where*, not *how the tool is coded*.

Think of A02\_internal\_encapsulation.yaml as **the spec \+ test contract** for A02, *for this Cell*.

---

## **2\. How A02’s fitness definition fits the Knowledge Plane** {#2.-how-a02’s-fitness-definition-fits-the-knowledge-plane}

Within knowledge/:

* manifest.yaml says:

  * “A02 is implemented by this Cell.”

  * Its severity (blocker/critical/warning).

  * Which suites must pass A02 to promote.

* definitions/contracts/\* define **what is externally visible**: RPC DTOs, event schemas, observability schemas, policy contracts.

* definitions/cell/cell.yaml describes the **internal domain**: entities, invariants, use cases – a “self-portrait” of the Cell.

* A02\_internal\_encapsulation.yaml sits between those and says:

  * “These are the **sharp boundaries** between internal world (domain \+ persistence) and external world (contracts).”

  * “These are the invariants that must always hold.”

  * “These are the fitness functions that verify we are not leaking internals anywhere.”

At runtime:

* CTK and other tooling load this file to:

  * Decide **which checks** to run.

  * Know **which artifacts** to read.

  * Write **partial conformance evidence** for A02 into evidence/.

This is how A02 becomes *evidence-driven* instead of just a vague “we should encapsulate stuff”.

---

## **3\. What “Internal Encapsulation” actually means in AXIOMS** {#3.-what-“internal-encapsulation”-actually-means-in-axioms}

In the AXIOMS world, internal encapsulation is more precise than the usual “encapsulation” buzzword:

* **Internal artifacts**:

  * Domain entities, aggregates, internal services.

  * Persistence models: tables, columns, indexes, keys, ORM mappings.

  * Internal error codes, stack traces, exception types, library-specific structures.

* **External artifacts**:

  * RPC contracts (OpenAPI/GraphQL/gRPC schemas).

  * Event schemas (AsyncAPI / JSON schema / Avro).

  * Policy input/output structures.

  * Observability contracts (log/metric/trace schema).

  * Public error models documented in contracts.

**A02 says:**

1. Contracts must be written in terms of **public DTOs**, not the internal entity classes or DB shape.

2. No trace of persistence must “escape”:

   * No table names or column names in external schemas or client-facing errors.

   * No constraints that directly encode internal storage layout.

3. Other Cells must **only** depend on:

   * DTOs generated from contracts, or

   * client libraries explicitly presented as public API,  
      not on internal namespaces of the Cell.

4. Actual runtime payloads (JSON, messages) must match the **external schemas**, not the internal entity/class structure.

So *A02 connects*:

* **Knowledge Plane**: contracts, domain definition, error model description.

* **Data Plane**: real HTTP bodies, events, logs.

* **Architectural Axes**:

  * **Dependency direction** – dependencies only point inward (contracts) not outward (internal stuff leaking).

  * **Communication** – payload shapes are stable and decoupled from internal storage.

---

## **4\. Structure and semantics of A02\_internal\_encapsulation.yaml** {#4.-structure-and-semantics-of-a02_internal_encapsulation.yaml}

The file follows the canonical pattern for Axx\_\*.yaml:

1. **Header & metadata**

   1. api\_version, kind – tell CTK how to parse.

   2. metadata – identifies the axiom, Cell, owner team, version, tags.

2. **axiom block**

   1. summary – short statement of A02 in this Cell.

   2. rationale – why it matters here.

   3. planes – for A02, mainly data and knowledge.

   4. axes – especially dependency\_direction and topology.

   5. related\_axioms – ties to A01 (independence), A03 (contracts), A12–A15 (evolution), etc.

3. **invariants block**

   1. Each invariant is:

      * Specific, non-ambiguous, testable.

      * Tagged with planes, axes, and quality attributes it touches.

      * Linked to a main verification strategy (static analysis, integration test…).

4. In this A02 definition we use four invariants:

   1. **A02-INV-01-CONTRACT-DOMAIN-DECOUPLING**  
       Contracts must not reference internal domain types/namespaces.

   2. **A02-INV-02-PERSISTENCE-HIDDEN**  
       Persistence schema must not appear in external contracts or client-facing errors.

   3. **A02-INV-03-CODE-BOUNDARY-RESPECTED**  
       Other Cells may not import internal Identity modules directly; only contract-derived clients/DTOs can be used.

   4. **A02-INV-04-RUNTIME-PAYLOAD-ENCAPSULATION**  
       Runtime responses/events must match external schemas and must not accidentally serialize internal fields/error details.

5. **fitness\_functions block**

   1. This is the executable surface:

      * Each FF:

        * Implements one or more invariants.

        * Declares type (static\_analysis / integration\_test).

        * Lists suites & environments.

        * Declares its input and output artifacts.

        * References a threshold\_id from fitness/thresholds.yaml.

6. For A02 we define three FFs:

   1. FF-A02-CONTRACT-LINT  
       Lints RPC and event contracts to find internal naming/persistence leaks.

   2. FF-A02-CODE-BOUNDARY-LINT  
       Analyzes the code graph to forbid external Cells from importing Identity internal modules.

   3. FF-A02-RUNTIME-PAYLOAD-CHECK  
       Integration tests that call real endpoints / listen to events and validate actual payloads against schemas.

These three together give you **build-time** and **runtime** coverage for encapsulation.

---

## **5\. Full example: A02\_internal\_encapsulation.yaml** {#5.-full-example:-a02_internal_encapsulation.yaml}

Drop this under:

cells/cell\_tpl/knowledge/definitions/fitness/axioms/A02\_internal\_encapsulation.yaml

and adapt cell\_id / owner\_team if you clone the template for another Cell.

api\_version: "axioms.erparom.dev/fitness-axiom.v1alpha1"

kind: "AxiomFitnessDefinition"\\nmetadata:

  axiom\_id: "A02"

  axiom\_name: "internal\_encapsulation"

  cell\_id: "identity"

  description: \>

    Implementation of A02 (Internal encapsulation) for the Identity Cell.

    Ensures that internal domain and persistence models are not exposed across

    Cell boundaries, and that only stable, contract-defined DTOs cross the

    boundary.

  owner\_team: "platform-identity"

  version: "1.0.0"

  tags:

    \- "axiom:A02"

    \- "axis:dependency\_direction"

    \- "axis:topology"

    \- "plane:data"

    \- "plane:knowledge"\\naxiom:

  summary: \>

    The Identity Cell must keep its internal domain and persistence models

    fully encapsulated. Only DTOs and schemas defined in RPC and event

    contracts may cross Cell boundaries.

  rationale: \>

    Encapsulation protects internal implementation details from leaking into

    external clients and other Cells. This reduces coupling, simplifies

    refactoring of domain and persistence models, and prevents accidental

    dependency on internal naming, structure or storage choices.

  planes:

    \- data

    \- knowledge

  axes:

    \- dependency\_direction

    \- topology

  related\_axioms:

    \- "A01"   \# cell independence

    \- "A03"   \# contract definition

    \- "A05"   \# acyclic dependencies

    \- "A12"   \# backward compatibility

    \- "A15"   \# contract evolution

  notes: \>

    For the Identity Cell, internal encapsulation means that domain entities,

    repositories and database schemas can change freely as long as contracts

    remain compatible. Contracts must use DTOs that are decoupled from internal

    namespaces and persistence structures.\\ninvariants:

  \- id: "A02-INV-01-CONTRACT-DOMAIN-DECOUPLING"

    description: \>

      External contracts (RPC and events) must not reference internal domain

      types, namespaces or persistence concepts. All externally visible schemas

      are defined as contract DTOs independent from internal entities.

    planes:

      \- knowledge

    category: "boundary\_schema"

    relates\_to\_axes:

      \- dependency\_direction

    relates\_to\_quality:

      \- encapsulation

      \- evolvability

    verification\_strategy: "static\_analysis"

    comments: \>

      This invariant is enforced by linting OpenAPI/AsyncAPI/schema artifacts

      to detect internal naming patterns, such as internal namespaces or entity

      class names, and flag them as leaks.\\n  \- id: "A02-INV-02-PERSISTENCE-HIDDEN"

    description: \>

      Persistence details (table names, column names, indexes, primary keys,

      foreign keys) must not appear in external contracts, client-facing logs

      or error messages that cross Cell boundaries.

    planes:

      \- data

      \- knowledge

    category: "persistence\_encapsulation"

    relates\_to\_axes:

      \- dependency\_direction

    relates\_to\_quality:

      \- encapsulation

      \- security

    verification\_strategy: "static\_analysis"

    comments: \>

      This invariant prevents accidental exposure of database structures, which

      would couple clients to storage choices and may leak sensitive internal

      details.\\n  \- id: "A02-INV-03-CODE-BOUNDARY-RESPECTED"

    description: \>

      No other Cell may reference internal Identity domain or persistence

      packages directly. Cross-Cell code-level dependencies must use generated

      clients, shared DTOs or interfaces derived from contracts, never direct

      imports of internal Identity modules.

    planes:

      \- data

      \- knowledge

    category: "code\_dependency\_boundary"

    relates\_to\_axes:

      \- dependency\_direction

      \- topology

    relates\_to\_quality:

      \- encapsulation

      \- independence

    verification\_strategy: "static\_analysis"

    comments: \>

      This invariant is validated by analyzing imports and references across

      the multi-Cell codebase to ensure that only contract/client packages,

      not internal Identity modules, are used externally.\\n  \- id: "A02-INV-04-RUNTIME-PAYLOAD-ENCAPSULATION"

    description: \>

      Runtime responses and events emitted by the Identity Cell must conform

      exactly to their declared schemas, without accidentally serializing

      internal entity fields, raw stack traces or persistence-specific data.

    planes:

      \- data

    category: "runtime\_payload\_shape"

    relates\_to\_axes:

      \- communication

    relates\_to\_quality:

      \- encapsulation

      \- reliability

    verification\_strategy: "integration\_test"

    comments: \>

      This invariant protects clients from relying on accidental fields and

      prevents leakage of implementation-specific details in JSON/XML payloads.\\nfitness\_functions:

  \- id: "FF-A02-CONTRACT-LINT"

    name: "Contract/domain decoupling lint"

    description: \>

      Static analysis of RPC and event contracts to detect leaks of internal

      domain or persistence concepts into external schemas (e.g. internal

      namespaces, entity class names, raw table/column names).

    implements\_invariants:

      \- "A02-INV-01-CONTRACT-DOMAIN-DECOUPLING"

      \- "A02-INV-02-PERSISTENCE-HIDDEN"

    type: "static\_analysis"

    planes:

      \- knowledge

    environments:

      \- dev

      \- ci

    suites:

      \- "ci\_minimal"

      \- "ci\_full"

    input\_artifacts:

      \- kind: "knowledge\_file"

        path: "definitions/contracts/rpc/openapi.yaml"

        description: "RPC contract definitions for the Identity Cell."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/events/"

        description: "Event contract definitions (AsyncAPI / schemas)."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/contract-index.yaml"

        description: "Index of all contracts exposed/consumed by the Cell."

      \- kind: "knowledge\_file"

        path: "definitions/cell/cell.yaml"

        description: "Cell metadata, used to derive internal naming patterns to forbid."

    output\_artifacts:

      \- kind: "conformance\_fragment"

        path: "evidence/conformance/partials/A02\_contract\_lint.json"

        description: "Violations and score for contract encapsulation checks."

      \- kind: "metric"

        path: "evidence/observability/metrics/fitness\_A02\_contract\_lint.prom"

        description: "Metric export of encapsulation lint results."

    pass\_criteria:

      threshold\_id: "ff\_a02\_contract\_lint"

      interpretation: \>

        Passes when no high-severity leaks of internal domain or persistence

        details are found in contracts and the encapsulation score meets or

        exceeds the configured threshold in fitness/thresholds.yaml.

    notes: \>

      Internal naming patterns (e.g. namespaces, table name prefixes) are

      configured for the analyzer so it can flag unintended appearances in

      externally visible schemas.\\n  \- id: "FF-A02-CODE-BOUNDARY-LINT"

    name: "Code boundary encapsulation lint"

    description: \>

      Static analysis across the codebase to ensure that no external Cell or

      shared library directly imports internal Identity domain or persistence

      modules. All cross-Cell usage of Identity must go through clients derived

      from contracts or shared DTOs.

    implements\_invariants:

      \- "A02-INV-03-CODE-BOUNDARY-RESPECTED"

    type: "static\_analysis"

    planes:

      \- data

      \- knowledge

    environments:

      \- dev

      \- ci

      \- staging

    suites:

      \- "ci\_full"

      \- "security\_weekly"

    input\_artifacts:

      \- kind: "source\_tree"

        path: ".."

        description: \>

          Root of the multi-Cell workspace or super-repo. Analyzer scans for

          imports of Identity internal packages from other Cells.

      \- kind: "knowledge\_file"

        path: "definitions/cell/dependencies.yaml"

        description: \>

          Declared upstream/downstream dependencies used to scope analysis.

      \- kind: "knowledge\_file"

        path: "definitions/contracts/contract-index.yaml"

        description: \>

          Declared contract clients that are allowed to be used by other Cells.

    output\_artifacts:

      \- kind: "conformance\_fragment"

        path: "evidence/conformance/partials/A02\_code\_boundary\_lint.json"

        description: "Report of forbidden imports and encapsulation violations."

      \- kind: "metric"

        path: "evidence/observability/metrics/fitness\_A02\_code\_boundary\_lint.prom"

        description: "Metric capturing number and severity of boundary violations."

    pass\_criteria:

      threshold\_id: "ff\_a02\_code\_boundary\_lint"

      interpretation: \>

        Passes when no forbidden imports are detected and the number of allowed

        exceptions (if any) stays within the configured limit defined in

        fitness/thresholds.yaml.

    notes: \>

      Some generated shared types may be whitelisted explicitly if they are

      considered part of the public client surface for the Identity Cell.\\n  \- id: "FF-A02-RUNTIME-PAYLOAD-CHECK"

    name: "Runtime payload encapsulation check"

    description: \>

      Integration tests that call selected RPC endpoints and consume emitted

      events, validating that responses and messages conform strictly to the

      declared schemas and do not include internal-only fields or raw error

      details.

    implements\_invariants:

      \- "A02-INV-04-RUNTIME-PAYLOAD-ENCAPSULATION"

    type: "integration\_test"

    planes:

      \- data

    environments:

      \- ci

      \- staging

    suites:

      \- "ci\_full"

      \- "pre\_release"

    input\_artifacts:

      \- kind: "knowledge\_file"

        path: "definitions/contracts/rpc/openapi.yaml"

        description: "Schema definitions for RPC responses."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/events/"

        description: "Schema definitions for emitted domain events."

      \- kind: "config\_file"

        path: "tests/integration/identity/endpoints\_under\_test.yaml"

        description: "List of endpoints and operations covered by this FF."

    output\_artifacts:

      \- kind: "conformance\_fragment"

        path: "evidence/conformance/partials/A02\_runtime\_payload.json"

        description: "Per-endpoint pass/fail information for payload checks."

      \- kind: "metric"

        path: "evidence/observability/metrics/fitness\_A02\_runtime\_payload.prom"

        description: "Aggregated metric for runtime encapsulation test results."

    pass\_criteria:

      threshold\_id: "ff\_a02\_runtime\_payload"

      interpretation: \>

        Passes when all covered endpoints and events produce payloads that

        validate successfully against schemas, with no extra or missing fields

        beyond what is allowed by contract evolution rules, and within the

        limits defined in fitness/thresholds.yaml.

    notes: \>

      This FF is particularly important when contracts evolve; it helps ensure

      that server-side refactorings of entities or persistence do not leak into

      external payloads or client-visible error details.\\nIf this matches your “thesis per file” expectation, next we can give **A03\_contract\_definition.yaml** the same treatment: what a “formal contract definition” *really* means in AXIOMS, how it ties to the Knowledge Plane and contract-index, and its invariants/fitness functions.

Perfect, let’s keep the “mini-RFC per file” format.

---

# **A03 – Contract Definition** {#a03-–-contract-definition}

**File:** knowledge/definitions/fitness/axioms/A03\_contract\_definition.yaml

---

## **1\. Purpose of this file** {#1.-purpose-of-this-file-2}

A03 (“Contract definition”) formalizes one of the core promises of AXIOMS:

*All externally visible surfaces of a Cell (RPC, events, policy, observability) MUST have formal, versioned contracts declared under definitions/contracts/ and indexed by contract-index.yaml.*

A03\_contract\_definition.yaml is the **authoritative declaration** of:

1. What “formal contract definition” means **for this specific Cell**.

2. Which **invariants** must be true for A03 to be considered satisfied.

3. Which **fitness functions** validate these invariants, where they run, what they read, and what evidence they produce.

This file does **not**:

* Decide severity or CI gating → that’s in knowledge/manifest.yaml (axioms.implementations).

* Store numeric thresholds for what “pass” means → that’s in fitness/thresholds.yaml.

* Implement the validators themselves → that’s in CTK / linters / tests. Here we *describe* what must exist and be checked.

Think of it as:

The contract (meta-contract) that binds a Cell to **real, machine-readable contracts** of all its surfaces, plus the tests that ensure those contracts are real, complete, and first-class citizens.

---

## **2\. How A03 fits into the Knowledge Plane** {#2.-how-a03-fits-into-the-knowledge-plane}

Within knowledge/ we have:

* definitions/contracts/  
   Where the **actual contracts** live:

  * rpc/ – OpenAPI, gRPC, GraphQL, etc.

  * events/ – AsyncAPI, JSON Schema, Avro.

  * policy/ – Rego modules, policy I/O schemas.

  * observability/ – metrics/logs/traces schemas, health endpoints.

* definitions/contracts/contract-index.yaml  
   The **catalog** of all those contracts: providers/consumers, surfaces, versions, paths.

* manifest.yaml  
   States that A03 is implemented, enforced, and might be a blocker for certain suites.

* A03\_contract\_definition.yaml (this file)  
   Binds the concept of “contract definition” to:

  * A small set of **invariants**: coverage, validity, versioning, and alignment with code.

  * A small set of **fitness functions** that:

    * Check that every surface has a contract.

    * Lint/validate those contracts.

    * Cross-check that contracts and implementation are in sync.

This is pure **Knowledge Plane**: it’s about *describing* surfaces, *validating* those descriptions, and connecting them to evidence and code—not about runtime routing or HTTP frameworks.

---

## **3\. What “Contract Definition” means in AXIOMS** {#3.-what-“contract-definition”-means-in-axioms}

In AXIOMS, a “contract” is not:

* “Whatever OpenAPI happens to exist if someone wrote it”.

* Nor “an informal wiki page”.

It is:

1. **Formal**

   * Machine readable: OpenAPI, AsyncAPI, JSON Schema, Rego, etc.

   * Validated by tools (no syntax errors, no broken references).

2. **Complete (for external surfaces)**

   * Every exposed RPC endpoint, event, policy decision point, and observability surface that crosses a Cell boundary is represented.

   * There are no “secret” endpoints in code that bypass the contract catalog.

3. **Versioned & traceable**

   * Contracts carry explicit versions and are tied to the Cell’s versioning story (definitions/cell/versions.yaml) and manifest.yaml gating rules.

   * Contract changes are visible and auditable (via contract-index, ADRs, or both).

4. **Source of truth**

   * Clients and servers are generated or at least aligned from these contracts.

   * No ad-hoc DTOs or endpoints diverge silently from what’s declared in definitions/contracts/.

A03 is the axiom that enforces that **this is how surfaces are defined**—not “maybe we have docs”.

---

## **4\. Structure and semantics of A03\_contract\_definition.yaml** {#4.-structure-and-semantics-of-a03_contract_definition.yaml}

Like A01/A02, the file has four key parts:

1. **Header & metadata**  
    Gives CTK enough information to parse and attribute:

   * api\_version / kind – type tag for this descriptor.

   * metadata – binds it to A03, a cell\_id, an owner team, etc.

2. **axiom block**  
    Contextualizes A03 in this Cell:

   * summary – one-paragraph statement of A03 here.

   * rationale – why “everything has a formal contract” matters in this domain.

   * planes – mainly knowledge, plus data (because contracts describe data surfaces).

   * axes – especially communication & dependency\_direction.

   * related\_axioms – A01 (independence), A02 (encapsulation), A04 (standard protocols), A12–A15 (evolution).

3. **invariants block**  
    Breaks A03 into testable truths. For Identity, we’ll define four:

   * **A03-INV-01-CONTRACT-COVERAGE**  
      Every external RPC/event/policy/observability surface is present in contract-index.yaml and has a backing contract file.

   * **A03-INV-02-CONTRACT-VALIDITY**  
      Each contract artifact is syntactically valid and passes its linter/validator (OpenAPI, AsyncAPI, JSON Schema, Rego, etc).

   * **A03-INV-03-CONTRACT-VERSIONING**  
      Contracts declare versions and those versions are consistent with definitions/cell/versions.yaml and manifest.yaml gating rules.

   * **A03-INV-04-CONTRACT-IMPLEMENTATION-ALIGNMENT**  
      The implemented endpoints/events/policies in code match what contracts say: no zombie endpoints, no missing paths, no type drift.

4. **fitness\_functions block**  
    Describes the actual checks:

   * **FF-A03-CONTRACT-INDEX-CONSISTENCY**  
      Ensures that contract-index.yaml reflects the filesystem and vice versa.

   * **FF-A03-CONTRACT-SCHEMA-VALIDATION**  
      Runs format-specific validators on all contract files.

   * **FF-A03-CONTRACT-VERSION-CONSISTENCY**  
      Cross-checks contract versions against the Cell version catalog and gating rules.

   * **FF-A03-CONTRACT-USAGE-CHECK**  
      Cross-checks code (routes, controllers, event publishers) against the declared contracts; ensures implementation aligns with contract-index.

Each FF:

* Lists environments & suites.

* Declares input artifacts (knowledge files, source trees).

* Declares output artifacts (evidence/conformance/partials/\*.json, metrics).

* References a threshold\_id defined in fitness/thresholds.yaml.

---

## **5\. Full example: A03\_contract\_definition.yaml** {#5.-full-example:-a03_contract_definition.yaml}

Path:

cells/cell\_tpl/knowledge/definitions/fitness/axioms/A03\_contract\_definition.yaml

api\_version: "axioms.erparom.dev/fitness-axiom.v1alpha1"

kind: "AxiomFitnessDefinition"\\nmetadata:

  axiom\_id: "A03"

  axiom\_name: "contract\_definition"

  cell\_id: "identity"

  description: \>

    Implementation of A03 (Contract definition) for the Identity Cell.

    Ensures that all externally visible RPC, event, policy and observability

    surfaces have formal, versioned contracts declared under

    definitions/contracts/ and indexed by contract-index.yaml.

  owner\_team: "platform-identity"

  version: "1.0.0"

  tags:

    \- "axiom:A03"

    \- "axis:communication"

    \- "axis:dependency\_direction"

    \- "plane:knowledge"

    \- "plane:data"\\naxiom:

  summary: \>

    The Identity Cell must define all externally visible RPC, event, policy and

    observability surfaces as formal, versioned contracts under

    definitions/contracts/, with a complete index in contract-index.yaml.

  rationale: \>

    Formal contracts are the basis for reliable interoperability, client

    generation, backward-compatible evolution and governance. Without complete

    and validated contracts, it is impossible to reason about dependencies,

    perform contract testing, or guarantee safe changes across Cells.

  planes:

    \- knowledge

    \- data

  axes:

    \- communication

    \- dependency\_direction

  related\_axioms:

    \- "A01"   \# cell independence

    \- "A02"   \# internal encapsulation

    \- "A04"   \# standard protocols and formats

    \- "A05"   \# acyclic dependencies

    \- "A12"   \# backward compatibility

    \- "A13"   \# deprecation policy

    \- "A14"   \# version negotiation

    \- "A15"   \# contract evolution

  notes: \>

    A03 focuses on the existence, completeness and validity of contracts, not

    yet on their compatibility across versions (which is handled by A12–A15).

    However, the presence of robust contracts is a prerequisite for those

    evolution-related axioms.\\ninvariants:

  \- id: "A03-INV-01-CONTRACT-COVERAGE"

    description: \>

      Every externally visible RPC endpoint, event, policy decision point and

      observability surface exposed by the Identity Cell is declared in

      definitions/contracts/ and referenced from

      definitions/contracts/contract-index.yaml, with no unindexed surfaces.

    planes:

      \- knowledge

    category: "surface\_catalog"

    relates\_to\_axes:

      \- communication

      \- dependency\_direction

    relates\_to\_quality:

      \- interoperability

      \- governance

    verification\_strategy: "static\_analysis"

    comments: \>

      This invariant enforces that contract-index.yaml is the authoritative

      catalog of all external surfaces, and that there are no hidden endpoints

      or topics that bypass the contract system.\\n  \- id: "A03-INV-02-CONTRACT-VALIDITY"

    description: \>

      All contract artifacts (OpenAPI, AsyncAPI, JSON Schema, Rego policy

      modules, observability schemas) are syntactically valid, pass their

      respective linters or validators, and contain the minimal metadata

      required by AXIOMS (e.g. title, version, description, contact/owner).

    planes:

      \- knowledge

    category: "schema\_validity"

    relates\_to\_axes:

      \- communication

    relates\_to\_quality:

      \- reliability

      \- operability

    verification\_strategy: "static\_analysis"

    comments: \>

      Ensures that consumers can rely on contracts being machine-readable and

      tool-friendly, and not just informal or partially broken documents.\\n  \- id: "A03-INV-03-CONTRACT-VERSIONING"

    description: \>

      Each external contract declares an explicit version, and that version is

      consistent with the Cell's versioning strategy as documented in

      definitions/cell/versions.yaml and the versioning notes in RPC/event

      documentation (e.g. identity.rpc.versioning.md).

    planes:

      \- knowledge

    category: "versioning"

    relates\_to\_axes:

      \- communication

      \- dependency\_direction

    relates\_to\_quality:

      \- evolvability

      \- governance

    verification\_strategy: "static\_analysis"

    comments: \>

      This invariant ensures that contracts and Cell versions are not evolving

      independently and that consumers can rely on explicit contract versions

      for compatibility and migration planning.\\n  \- id: "A03-INV-04-CONTRACT-IMPLEMENTATION-ALIGNMENT"

    description: \>

      The implemented RPC routes, event subjects/topics, policy entrypoints and

      observability endpoints in the Identity Cell match what is declared in

      contract-index.yaml and the underlying contract files. There are no

      implemented external surfaces without contracts, and no declared

      contracts that are never implemented.

    planes:

      \- data

      \- knowledge

    category: "implementation\_alignment"

    relates\_to\_axes:

      \- communication

    relates\_to\_quality:

      \- reliability

      \- testability

    verification\_strategy: "integration\_test"

    comments: \>

      This invariant is typically enforced through contract tests or runtime

      probes that call endpoints and topics based on contract definitions and

      verify that the implementation behaves as expected.\\nfitness\_functions:

  \- id: "FF-A03-CONTRACT-INDEX-CONSISTENCY"

    name: "Contract index consistency check"

    description: \>

      Static analysis of definitions/contracts/ and

      definitions/contracts/contract-index.yaml to ensure that all contract

      files are indexed, all index entries point to existing files, and

      metadata (provider/consumer, surface type, version) is consistent.

    implements\_invariants:

      \- "A03-INV-01-CONTRACT-COVERAGE"

    type: "static\_analysis"

    planes:

      \- knowledge

    environments:

      \- dev

      \- ci

    suites:

      \- "ci\_minimal"

      \- "ci\_full"

    input\_artifacts:

      \- kind: "knowledge\_file"

        path: "definitions/contracts/contract-index.yaml"

        description: "Main catalog of RPC, event, policy and observability contracts."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/"

        description: "Directory tree containing all contract artifacts referenced by the index."

    output\_artifacts:

      \- kind: "conformance\_fragment"

        path: "evidence/conformance/partials/A03\_contract\_index\_consistency.json"

        description: "Report of missing, extra or inconsistent entries in the contract index."

      \- kind: "metric"

        path: "evidence/observability/metrics/fitness\_A03\_contract\_index\_consistency.prom"

        description: "Metric summarizing contract coverage and index consistency."

    pass\_criteria:

      threshold\_id: "ff\_a03\_contract\_index\_consistency"

      interpretation: \>

        Passes when all contract-index.yaml entries resolve to existing files,

        all contract files that should be exposed are indexed, and the index

        structure meets the consistency rules defined in fitness/thresholds.yaml.

    notes: \>

      This FF can also enforce naming and layout conventions for contracts

      (e.g. one AsyncAPI per logical stream, one OpenAPI per RPC surface).\\n  \- id: "FF-A03-CONTRACT-SCHEMA-VALIDATION"

    name: "Contract schema validation"

    description: \>

      Runs format-specific validators for each contract artifact (OpenAPI,

      AsyncAPI, JSON Schema, Rego modules, observability schemas) to ensure

      they are syntactically valid, self-consistent and carry required metadata.

    implements\_invariants:

      \- "A03-INV-02-CONTRACT-VALIDITY"

    type: "static\_analysis"

    planes:

      \- knowledge

    environments:

      \- dev

      \- ci

      \- staging

    suites:

      \- "ci\_minimal"

      \- "ci\_full"

    input\_artifacts:

      \- kind: "knowledge\_file"

        path: "definitions/contracts/rpc/"

        description: "RPC contract definitions (e.g. OpenAPI files)."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/events/"

        description: "Event contract definitions (e.g. AsyncAPI or schema files)."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/policy/"

        description: "Policy contracts (Rego modules and policy I/O schemas)."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/observability/"

        description: "Observability contracts (metrics/logs/traces schemas, health endpoints)."

    output\_artifacts:

      \- kind: "conformance\_fragment"

        path: "evidence/conformance/partials/A03\_contract\_schema\_validation.json"

        description: "Validation results for all contract artifacts and their metadata."

      \- kind: "metric"

        path: "evidence/observability/metrics/fitness\_A03\_contract\_schema\_validation.prom"

        description: "Aggregated metrics for contract validation status (e.g. number of invalid contracts)."

    pass\_criteria:

      threshold\_id: "ff\_a03\_contract\_schema\_validation"

      interpretation: \>

        Passes when all contract artifacts are syntactically valid, required

        metadata fields are present, and the number and severity of violations

        is within the limits defined in fitness/thresholds.yaml.

    notes: \>

      This FF typically calls format-specific tools (e.g. openapi-generator

      validate, asyncapi CLI, JSON Schema validators, OPA check) under the hood.\\n  \- id: "FF-A03-CONTRACT-VERSION-CONSISTENCY"

    name: "Contract version consistency check"

    description: \>

      Cross-checks declared contract versions against the Cell's versioning

      catalog (definitions/cell/versions.yaml) and any documented versioning

      strategy (e.g. identity.rpc.versioning.md) to ensure that contract

      versions, stability levels and deprecation statuses are consistent.

    implements\_invariants:

      \- "A03-INV-03-CONTRACT-VERSIONING"

    type: "static\_analysis"

    planes:

      \- knowledge

    environments:

      \- ci

      \- staging

    suites:

      \- "ci\_full"

      \- "pre\_release"

    input\_artifacts:

      \- kind: "knowledge\_file"

        path: "definitions/cell/versions.yaml"

        description: "Catalog of Cell versions and their lifecycle stages."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/contract-index.yaml"

        description: "Index of contracts, including declared versions and stability annotations."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/rpc/identity.rpc.versioning.md"

        description: "Documentation of RPC versioning rules, where applicable."

    output\_artifacts:

      \- kind: "conformance\_fragment"

        path: "evidence/conformance/partials/A03\_contract\_version\_consistency.json"

        description: "Report of inconsistencies between contract versions and Cell versioning rules."

      \- kind: "metric"

        path: "evidence/observability/metrics/fitness\_A03\_contract\_version\_consistency.prom"

        description: "Metric indicating how many contracts have consistent versioning."

    pass\_criteria:

      threshold\_id: "ff\_a03\_contract\_version\_consistency"

      interpretation: \>

        Passes when contract versions are aligned with the Cell's versioning

        catalog and strategy, and no critical inconsistencies are found, as

        defined in fitness/thresholds.yaml.

    notes: \>

      This FF complements A12–A15 by ensuring that the input data for

      compatibility checks (contract versions and states) is coherent.\\n  \- id: "FF-A03-CONTRACT-USAGE-CHECK"

    name: "Contract/implementation usage check"

    description: \>

      Contract-based integration tests or probes that derive their targets from

      contract-index.yaml and verify that the implemented RPC endpoints,

      event topics/subjects, policy entrypoints and observability endpoints

      exist and behave at a minimal contract level (e.g. correct HTTP status

      codes, content types, basic schema validation).

    implements\_invariants:

      \- "A03-INV-04-CONTRACT-IMPLEMENTATION-ALIGNMENT"

    type: "integration\_test"

    planes:

      \- data

      \- knowledge

    environments:

      \- ci

      \- staging

    suites:

      \- "ci\_full"

      \- "pre\_release"

    input\_artifacts:

      \- kind: "knowledge\_file"

        path: "definitions/contracts/contract-index.yaml"

        description: "Defines which external surfaces must be exercised by this FF."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/rpc/"

        description: "RPC contracts used to derive concrete test cases."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/events/"

        description: "Event contracts used to derive topics/subjects to probe."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/observability/"

        description: "Health/observability contracts used to derive endpoints to hit."

    output\_artifacts:

      \- kind: "conformance\_fragment"

        path: "evidence/conformance/partials/A03\_contract\_usage.json"

        description: "Per-surface pass/fail results and basic behavioral checks."

      \- kind: "metric"

        path: "evidence/observability/metrics/fitness\_A03\_contract\_usage.prom"

        description: "Aggregated metric summarizing contract/implementation alignment."

    pass\_criteria:

      threshold\_id: "ff\_a03\_contract\_usage"

      interpretation: \>

        Passes when all externally exposed surfaces declared in

        contract-index.yaml respond and behave at least at a minimal level of

        contract conformance, within the limits defined in fitness/thresholds.yaml.

    notes: \>

      This FF is the bridge between pure Knowledge Plane contracts and Data

      Plane reality: it proves that the declared contracts actually correspond

      to implemented, reachable surfaces.\\nIf this matches the level of depth you want for Appendix A, we can proceed with **A04\_standard\_protocols.yaml** next, focusing on enforcing standardized protocols/formats and avoiding ad-hoc transport cruft.\\n

Nice, let’s wire A04 properly.

---

# **A04 – Standard Protocols and Formats**

**File:** `knowledge/definitions/fitness/axioms/A04_standard_protocols.yaml`

---

## **1\. Purpose of this file**

A04 (“Standard protocols and formats”) captures the rule that:

*All external communication surfaces of a Cell (RPC, events, observability) MUST use a small, explicit, standardized set of protocols and data formats, avoiding bespoke or proprietary transports.*

`A04_standard_protocols.yaml` is the **formal, machine-readable definition** of how this Cell (Identity in the template) applies that rule.

It provides:

1. A Cell-specific **interpretation** of A04:

   * Which protocols and formats are allowed for RPC, events, observability.

   * Any extra constraints (e.g. JSON only; no XML unless explicitly whitelisted).

2. A set of **invariants** that must always hold:

   * Contracts explicitly declare supported protocols and media types.

   * All declared protocols/formats are within the approved AXIOMS profile.

   * Implementation actually uses those protocols and content types at runtime.

3. A set of **fitness functions** that enforce these invariants:

   * Static analysis over contracts.

   * Optional static checks over configuration.

   * Runtime probes checking real responses and messages.

This file is **not** where we:

* Define whether A04 is “blocker vs warning” or which suites gate on it → that’s in `manifest.yaml`.

* Define numeric thresholds, e.g. “0 non-standard protocols allowed” → that’s in `fitness/thresholds.yaml`.

* Implement protocol validators → that lives in CTK / CI tooling.

Instead, this file acts as:

The declaration that says, “For this Cell, *these* are the allowed protocols and formats, *these* are the invariants, and *these* are the checks that must be run.”

---

## **2\. How A04 fits into the Knowledge Plane**

Within the `knowledge/` tree:

* `definitions/contracts/rpc/` – describes RPC surfaces, including protocol and content-type.

* `definitions/contracts/events/` – describes event surfaces (event bus, topics, wire format).

* `definitions/contracts/observability/` – describes health endpoints and telemetry formats.

* `definitions/contracts/contract-index.yaml` – catalogs all external surfaces and their protocol/format metadata.

A04 lives in:

* `definitions/fitness/axioms/A04_standard_protocols.yaml` – this file.

And it:

* **Reads**: the contract artifacts and index to see which protocols are declared.

* **Declares**: invariants that say “only this set of protocols is allowed”.

* **Declares**: fitness functions that check both:

  * The **declarative layer** (contracts and configs).

  * The **runtime layer** (actual HTTP headers, event serialization, etc.).

This is pure Knowledge Plane work: codifying **what protocols/formats are allowed**, and ensuring that what the contracts say matches what actually happens.

Note: A18 (“secure communications”) is about **security properties** (TLS, mTLS), while A04 is about **protocol/format standardization** (HTTP(S), JSON, gRPC, etc.). They complement each other but remain distinct.

---

## **3\. What “Standard Protocols and Formats” means in AXIOMS**

In AXIOMS, A04 is specifically about **not inventing new wire protocols** when:

* Existing, ubiquitous standards work just fine.

* Existing tooling (proxies, gateways, client generators, tracing, monitoring) can already understand them.

For a typical web/backend system like our Identity Cell, “standard protocols and formats” usually means:

* **RPC**:

  * Protocols: `https` (HTTP/1.1 or HTTP/2).

  * Encodings: JSON (`application/json`) or, where justified, well-known formats like Protobuf with gRPC.

  * No custom binary protocols, no bespoke encodings tied to a specific library.

* **Events**:

  * Use message brokers and wire formats describable by AsyncAPI / JSON Schema / Avro.

  * Fixed set of content-types (e.g. `application/json`, `application/cloudevents+json`).

  * No opaque byte blobs that only one homegrown consumer can understand.

* **Observability**:

  * Health endpoints over HTTP(S) with JSON payloads.

  * Metrics/logs/traces formats that are compatible with standard tools (Prometheus exposition, OTLP, etc.), as declared in `metrics.schema.yaml`, `logs.schema.yaml`, `traces.schema.yaml`.

A04 is the guarantee that:

* **Contracts explicitly state the protocols and formats**.

* **Those protocols/formats are within an approved allowlist** at AXIOMS / organization level.

* **Implementation doesn’t silently diverge**, e.g. contracts say JSON but server returns HTML or some binary mess.

---

## **4\. Structure of `A04_standard_protocols.yaml`**

As with the other axiom files:

1. **Header & metadata**

   * `api_version`, `kind` – classify this as a fitness definition for an axiom.

   * `metadata` – tie to `A04`, `cell_id`, `owner_team`, etc.

2. **`axiom` block**

   * `summary` – short form of A04 for this Cell.

   * `rationale` – why standard protocols matter for Identity.

   * `planes` – primarily `data` and `knowledge`.

   * `axes` – mainly `communication` and (secondarily) `dependency_direction`.

   * `related_axioms` – e.g. A03 (contracts), A11 (tracing, which relies heavily on standard protocols), A18 (secure comms), A25–A26 (observability).

3. **`invariants` block**  
    We’ll define three core invariants:

   * **A04-INV-01-PROTOCOL-DECLARED-AND-ALLOWED**  
      Every external surface has a declared protocol/format, and it belongs to the approved allowlist.

   * **A04-INV-02-CONTRACT-FORMAT-STANDARD**  
      The serialization formats in contracts are standard and compatible with the broader toolchain (e.g. JSON/Protobuf/Avro). No “raw binary” or “custom\_format\_v1” nonsense.

   * **A04-INV-03-RUNTIME-PROTOCOL-CONFORMANCE**  
      At runtime, endpoints and events actually use the declared protocols and encodings (e.g. correct `Content-Type`, no HTML error pages for JSON APIs).

4. **`fitness_functions` block**  
    We bind those invariants to concrete checks:

   * **FF-A04-CONTRACT-PROTOCOL-LINT**  
      Static analysis of `contract-index.yaml` and contract files to ensure protocols/formats are declared and come from an allowlist.

   * **FF-A04-CONTRACT-FORMAT-VALIDATION**  
      Static checks that ensure formats are compatible with known standards and tooling.

   * **FF-A04-RUNTIME-PROTOCOL-CHECK**  
      Contract-driven runtime probes that hit endpoints / listen to events and validate protocol & Content-Type behavior.

Each FF:

* Declares `type`, `planes`, `environments`, `suites`.

* Lists *input artifacts* (knowledge files, configs).

* Lists *output artifacts* (partial conformance fragments \+ metrics).

* References a `threshold_id` defined in `fitness/thresholds.yaml`.

---

## **5\. Full example: `A04_standard_protocols.yaml`**

Path:

`cells/cell_tpl/knowledge/definitions/fitness/axioms/A04_standard_protocols.yaml`

api\_version: "axioms.erparom.dev/fitness-axiom.v1alpha1"

kind: "AxiomFitnessDefinition"

metadata:

  axiom\_id: "A04"

  axiom\_name: "standard\_protocols"

  cell\_id: "identity"

  description: \>

    Implementation of A04 (Standard protocols and formats) for the Identity Cell.

    Ensures that all external RPC, event and observability surfaces use a small,

    explicit set of standard protocols and data formats, as declared in the

    Cell's contracts and contract index.

  owner\_team: "platform-identity"

  version: "1.0.0"

  tags:

    \- "axiom:A04"

    \- "axis:communication"

    \- "axis:dependency\_direction"

    \- "plane:data"

    \- "plane:knowledge"

axiom:

  summary: \>

    The Identity Cell must expose its external RPC, event and observability

    surfaces only via standard, explicitly declared protocols and data formats

    (e.g. HTTPS+JSON, AsyncAPI-described event messages), avoiding bespoke

    or proprietary transports.

  rationale: \>

    Standard protocols and formats enable interoperability, tooling support

    (client generators, gateways, tracing, monitoring) and reduce the

    operational burden. By constraining protocols to an explicit allowlist,

    the system avoids one-off transports that are hard to maintain and govern.

  planes:

    \- data

    \- knowledge

  axes:

    \- communication

    \- dependency\_direction

  related\_axioms:

    \- "A03"   \# contract definition

    \- "A11"   \# tracing (relies on standard protocols for propagation)

    \- "A18"   \# secure communications (TLS over standard protocols)

    \- "A25"   \# observability baseline

    \- "A26"   \# standard telemetry

  notes: \>

    A04 focuses on the choice of protocols and serialization formats, not on

    security properties such as encryption or identity (which are handled by

    A18 and related axioms). However, the two often work together in practice.

invariants:

  \- id: "A04-INV-01-PROTOCOL-DECLARED-AND-ALLOWED"

    description: \>

      Every externally visible RPC, event and observability surface exposed by

      the Identity Cell declares its protocol and serialization format in the

      contracts and contract-index.yaml, and these values belong to an

      approved allowlist of standard protocols and formats defined at the

      AXIOMS or organizational level.

    planes:

      \- knowledge

    category: "protocol\_metadata"

    relates\_to\_axes:

      \- communication

    relates\_to\_quality:

      \- interoperability

      \- governance

    verification\_strategy: "static\_analysis"

    comments: \>

      This invariant ensures that there are no undocumented or implicit

      protocols and that all protocols used can be reasoned about and governed

      centrally.

  \- id: "A04-INV-02-CONTRACT-FORMAT-STANDARD"

    description: \>

      The serialization formats used for RPC payloads, event messages and

      observability payloads are standard and tool-friendly (e.g. JSON,

      Protobuf, Avro), and not custom binary blobs or ad-hoc encodings that

      cannot be described by the chosen contract languages.

    planes:

      \- knowledge

    category: "format\_standardization"

    relates\_to\_axes:

      \- communication

    relates\_to\_quality:

      \- interoperability

      \- evolvability

    verification\_strategy: "static\_analysis"

    comments: \>

      This invariant is enforced by inspecting contract schemas and metadata to

      ensure that all formats are part of an approved set and compatible with

      existing tooling (e.g. OpenAPI generators, AsyncAPI tooling, schema

      registries).

  \- id: "A04-INV-03-RUNTIME-PROTOCOL-CONFORMANCE"

    description: \>

      At runtime, the Identity Cell's RPC endpoints, event emissions and

      observability endpoints use the protocols and serialization formats

      declared in the contracts, including HTTP(S) methods, status codes,

      content-types and event envelope formats (e.g. CloudEvents).

    planes:

      \- data

    category: "runtime\_protocol\_behavior"

    relates\_to\_axes:

      \- communication

    relates\_to\_quality:

      \- reliability

      \- testability

    verification\_strategy: "integration\_test"

    comments: \>

      This invariant ensures that the real behavior of the Cell matches what

      is advertised in the contracts and contract index, preventing divergence

      between specification and implementation.

fitness\_functions:

  \- id: "FF-A04-CONTRACT-PROTOCOL-LINT"

    name: "Contract protocol and format lint"

    description: \>

      Static analysis of contract-index.yaml and associated contract files to

      ensure that each external surface declares a protocol and serialization

      format, and that these values are part of the approved allowlist for

      the Identity Cell.

    implements\_invariants:

      \- "A04-INV-01-PROTOCOL-DECLARED-AND-ALLOWED"

      \- "A04-INV-02-CONTRACT-FORMAT-STANDARD"

    type: "static\_analysis"

    planes:

      \- knowledge

    environments:

      \- dev

      \- ci

    suites:

      \- "ci\_minimal"

      \- "ci\_full"

    input\_artifacts:

      \- kind: "knowledge\_file"

        path: "definitions/contracts/contract-index.yaml"

        description: "Catalog of all external surfaces and their declared protocols/formats."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/rpc/"

        description: "RPC contract files containing protocol and content-type metadata."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/events/"

        description: "Event contract files with transport and payload format metadata."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/observability/"

        description: "Observability contracts describing health endpoints and telemetry formats."

      \- kind: "config\_file"

        path: "config/axioms/protocol\_allowlist.yaml"

        description: "Optional Cell- or org-level configuration listing allowed protocols and formats."

    output\_artifacts:

      \- kind: "conformance\_fragment"

        path: "evidence/conformance/partials/A04\_contract\_protocol\_lint.json"

        description: "Detailed report of non-declared or non-allowed protocols and formats."

      \- kind: "metric"

        path: "evidence/observability/metrics/fitness\_A04\_contract\_protocol\_lint.prom"

        description: "Metric summarizing how many surfaces comply with protocol/format allowlists."

    pass\_criteria:

      threshold\_id: "ff\_a04\_contract\_protocol\_lint"

      interpretation: \>

        Passes when all external surfaces have declared protocols and formats,

        and all of those belong to the allowed set defined for the Cell, within

        the tolerances specified in fitness/thresholds.yaml.

    notes: \>

      The allowlist may be defined globally (e.g. in a platform repo) and

      referenced here; this FF is the enforcement point that prevents ad-hoc

      protocols from creeping in.

  \- id: "FF-A04-CONTRACT-FORMAT-VALIDATION"

    name: "Contract format compatibility validation"

    description: \>

      Static checks to verify that the declared formats in contracts are

      compatible with standard tooling, by invoking schema/contract validators

      and, where applicable, attempting dry-run code generation or client stub

      creation for representative cases.

    implements\_invariants:

      \- "A04-INV-02-CONTRACT-FORMAT-STANDARD"

    type: "static\_analysis"

    planes:

      \- knowledge

    environments:

      \- dev

      \- ci

    suites:

      \- "ci\_full"

    input\_artifacts:

      \- kind: "knowledge\_file"

        path: "definitions/contracts/rpc/"

        description: "RPC contracts for which tooling compatibility is checked."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/events/"

        description: "Event contracts subjected to schema/tooling validation."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/observability/"

        description: "Observability contracts, checked for compatibility with standard collectors."

    output\_artifacts:

      \- kind: "conformance\_fragment"

        path: "evidence/conformance/partials/A04\_contract\_format\_validation.json"

        description: "Results of format/tooling compatibility checks for all relevant contracts."

      \- kind: "metric"

        path: "evidence/observability/metrics/fitness\_A04\_contract\_format\_validation.prom"

        description: "Metric indicating how many contracts are fully tooling-compatible."

    pass\_criteria:

      threshold\_id: "ff\_a04\_contract\_format\_validation"

      interpretation: \>

        Passes when all contract formats are recognized and supported by the

        chosen toolchain and no critical incompatibilities are detected, as

        defined in fitness/thresholds.yaml.

    notes: \>

      This FF complements A03's schema validation by focusing not only on

      syntactic validity but also on practical tooling compatibility.

  \- id: "FF-A04-RUNTIME-PROTOCOL-CHECK"

    name: "Runtime protocol and content-type check"

    description: \>

      Contract-driven integration tests that invoke RPC endpoints, subscribe

      to or inspect emitted events, and call observability endpoints to verify

      that the actual protocols, HTTP methods, status codes and content-types

      match what is declared in the contracts and contract index.

    implements\_invariants:

      \- "A04-INV-03-RUNTIME-PROTOCOL-CONFORMANCE"

    type: "integration\_test"

    planes:

      \- data

      \- knowledge

    environments:

      \- ci

      \- staging

    suites:

      \- "ci\_full"

      \- "pre\_release"

    input\_artifacts:

      \- kind: "knowledge\_file"

        path: "definitions/contracts/contract-index.yaml"

        description: "Drives which surfaces must be exercised by the runtime protocol checks."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/rpc/"

        description: "RPC contracts used to generate concrete HTTP calls and expected content-types."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/events/"

        description: "Event contracts used to derive topics/subjects and expected payload formats."

      \- kind: "knowledge\_file"

        path: "definitions/contracts/observability/"

        description: "Health and telemetry endpoint contracts used to derive expected behavior."

    output\_artifacts:

      \- kind: "conformance\_fragment"

        path: "evidence/conformance/partials/A04\_runtime\_protocol\_check.json"

        description: "Per-surface pass/fail results for runtime protocol and content-type checks."

      \- kind: "metric"

        path: "evidence/observability/metrics/fitness\_A04\_runtime\_protocol\_check.prom"

        description: "Aggregated metric summarizing runtime conformance to declared protocols."

    pass\_criteria:

      threshold\_id: "ff\_a04\_runtime\_protocol\_check"

      interpretation: \>

        Passes when all probed surfaces respond with the expected protocol

        behavior (e.g. HTTPS, correct HTTP method, status codes, content-type)

        and no critical mismatches are found, within the bounds defined in

        fitness/thresholds.yaml.

    notes: \>

      This FF closes the loop between the Knowledge Plane and Data Plane for

      A04, proving that standardized protocols are not only declared but also

      honored in real traffic.

If this matches what you need, we can keep going with **A05\_acyclic\_dependencies.yaml** at the same depth, focusing on dependency graphs, no cycles, and push-button checks over repo \+ runtime wiring.

