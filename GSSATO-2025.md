# **Global Standard** **for Software Architecture Taxonomy and Ontology**

## *Ver. 1.0, 2025\~2026*

## ***Status:** DRAFT 1.0* 

## ***Author**: Enrique Pascalin*

[**Overview	3**](#overview)

[Core Principles	3](#core-principles)

[Orthogonality Matrix	3](#orthogonality-matrix)

[Relationships between Dimensions	3](#relationships-between-dimensions)

[Validation of Mutual Exclusivity	4](#validation-of-mutual-exclusivity)

[Core Principles	4](#heading)

[**DIMENSION 1: KNOWLEDGE PLANE (Research & Requirements)	5**](#dimension-1:-knowledge-plane-\(research-&-requirements\))

[1.1 Research Methodologies	5](#1.1-research-methodologies)

[1.2 Requirements Engineering Approaches	5](#1.2-requirements-engineering-approaches)

[1.3 Domain Analysis Techniques	5](#1.3-domain-analysis-techniques)

[1.4 Stakeholder Engagement Methods	5](#1.4-stakeholder-engagement-methods)

[1.5 Scope & Risk Definition Frameworks	5](#1.5-scope-&-risk-definition-frameworks)

[1.6 Knowledge Representation Standards	5](#1.6-knowledge-representation-standards)

[1.7 Validation & Verification Protocols	6](#1.7-validation-&-verification-protocols)

[1.8 Documentation and Decision Standards	6](#1.8-documentation-and-decision-standards)

[1.9 Knowledge Transfer & Mentoring	6](#1.9-knowledge-transfer-&-mentoring)

[**DIMENSION 2: STRUCTURAL DIMENSION	7**](#dimension-2:-structural-dimension)

[2.1 System Topology Archetypes (STA)	7](#2.1-system-topology-archetypes-\(sta\))

[2.2 Internal Structure Archetypes (ISA)	7](#2.2-internal-structure-archetypes-\(isa\))

[2.3 Architectural Patterns (AP)	7](#2.3-architectural-patterns-\(ap\))

[2.4 Design Patterns (DP)	7](#2.4-design-patterns-\(dp\))

[2.5 Programming Paradigms (PP)	7](#2.5-programming-paradigms-\(pp\))

[**DIMENSION 3: EPISTEMOLOGICAL DIMENSION	8**](#dimension-3:-epistemological-dimension)

[3.1 Domain Modeling Archetypes (DMA)	8](#3.1-domain-modeling-archetypes-\(dma\))

[3.2 Architecture Design Principles (ADP)	8](#3.3-architecture-design-principles-\(adp\))

[3.3 Verification Methodologies (VM)	8](#3.4-verification-methodologies-\(vm\))

[**DIMENSION 4: PROCESS DIMENSION	9**](#dimension-4:-process-dimension)

[4.1 Engineering Practices (EP)	9](#4.1-engineering-practices-\(ep\))

[4.2 Software Development Methodologies (SDM)	9](#4.2-software-development-methodologies-\(sdm\))

[4.3 Deployment & Operations Approaches (DOA)	9](#4.3-deployment-&-operations-approaches-\(doa\))

[4.4 Team & Organizational Models (TOM)	9](#4.4-team-&-organizational-models-\(tom\))

[4.5 Governance & Compliance Processes	9](#4.5-governance-&-compliance-processes)

[**DIMENSION 5: QUALITY DIMENSION (CrossCutting)	10**](#dimension-5:-quality-dimension-\(crosscutting\))

[5.1 Quality Attribute Approaches (QAA)	10](#5.1-quality-attribute-approaches-\(qaa\))

[5.2 Compliance & Standards (CS)	10](#5.2-compliance-&-standards-\(cs\))

[**THE UNIVERSAL ARCHITECTURE SPECIFICATION TEMPLATE	11**](#the-universal-architecture-specification-template)

[NEXT STEPS FOR STANDARDIZATION	12](#next-steps-for-standardization)

[Architecture Decision Framework	12](#architecture-decision-framework)

[Maturity Assessment Matrix	12](#maturity-assessment-matrix)

# **Overview** {#overview}

This document defines the *Global Standard for Software Architecture Taxonomy and Ontology (GSSATO)*. Its purpose is to provide a rigorous, orthogonal framework that allows architects to describe, compare, and evaluate software architectures using a common coordinate system.

**GSSATO** decomposes architectural decision-making into five independent but related dimensions:

* **D1 – Knowledge Plane:** How we understand and define what must be built.  
* **D2 – Structural Dimension:** How the system is decomposed and structured in space.  
* **D3 – Epistemological Dimension:** How we conceptualize, model, and reason about the solution.  
* **D4 – Process Dimension:** How people, practices, and pipelines build and evolve the system.  
* **D5 – Quality Dimension:** How we define, measure, and protect “how well” the system works.

For any given system, we can locate its architecture by specifying its coordinates in these dimensions. Two systems are comparable when expressed in GSSATO terms, even if their underlying technologies differ. This standard is intentionally technology-agnostic and focuses instead on *decisions*, *categories*, and *relationships* that remain stable across time and stacks.

## **Core Principles** {#core-principles}

* **Orthogonality** – Each dimension captures a distinct axis of decision-making. A concept defined in one dimension applies independently of choices in other dimensions.  
* **Temporal Linearity** – Typical work flows from abstract (D1 Knowledge) to concrete (D2 Structure, D4 Process), but iteration across dimensions is expected and encouraged.  
* **Technology Agnosticism** – GSSATO classifies *types of decisions*, not specific tools, frameworks, or vendors. Tools are examples, not the taxonomy itself.  
* **Measurability** – Choices made in each dimension should be expressible as verifiable criteria (e.g., SLAs, processes, topologies, models) rather than vague intentions.  
* **Composability** – Architectural descriptions can be composed from smaller units (contexts, subsystems, cells) while preserving their coordinates in each dimension.

## **Orthogonality Matrix** {#orthogonality-matrix}

| Decision | Example Choice | Dimension / Category | Notes |
| ----- | ----- | ----- | ----- |
| "Use Microservices" | STA choice | D2.1 | Structural decision |
| "Use Clean Architecture internally" | ISA choice | D2.2 | Structural decision |
| "Apply DDD for domain modeling" | DMA choice | D3.1 | Epistemological decision |
| "Use TDD for development" | EP choice | D4.1 | Process decision |
| "Ensure \<100ms response time" | QAA choice | D5.1 | Quality constraint |
| "Use Scrum with 2-week sprints" | SDM choice | D4.2 | Process decision |

***Note**:* Categories like STA, ISA, DMA, EP, QAA are taxonomy nodes inside the dimensions. Implementation tools are expected to reference decisions by category ID (e.g. `D2.1.STA.MICROSERVICES`).

## **Relationships between Dimensions** {#relationships-between-dimensions}

1. **D1 (Knowledge) → D2 (Structure)**: Requirements inform topology choice  
2. **D1 (Knowledge) → D3 (Epistemology)**: Domain complexity informs modeling approach  
3. **D2 (Structure) → D4 (Process)**: Architecture influences team structure (Conway's Law)  
4. **D3 (Epistemology) → D2 (Structure)**: Modeling approach suggests certain patterns  
5. **D5 (Quality) → All**: Quality requirements constrain all other dimensions

## **Validation of Mutual Exclusivity** {#validation-of-mutual-exclusivity}

Each dimension asks a fundamentally different question:

* **D1**: "How do we know what to build?"  
* **D2**: "What is the structure of what we build?"  
* **D3**: "What do we think about what we build?"  
* **D4**: "How do we build and deliver it?"  
* **D5**: "How well does it work?"

Choices in one dimension don't dictate choices in others (though they may influence them).

#  {#heading}

# **DIMENSION 1: KNOWLEDGE PLANE (Research & Requirements)** {#dimension-1:-knowledge-plane-(research-&-requirements)}

***Purpose**: Understanding what to build*  
***Formal definition**: The set of methodologies used to acquire context, define boundaries, and establish the problem space before solutioning begins.*

## **1.1 Research Methodologies** {#1.1-research-methodologies}

* **Ethnographic Studies**: Immersive observation of users in context  
* **Stakeholder Analysis**: Systematic identification and classification of stakeholders  
* **Competitive Analysis**: Study of existing solutions in the domain  
* **Technology Radar**: Systematic tracking of technology evolution

## **1.2 Requirements Engineering Approaches** {#1.2-requirements-engineering-approaches}

* **Use Case Modeling**: Functional decomposition via actors and use cases  
* **User Story Mapping**: Feature organization by user journeys  
* **Quality Attribute Workshop**: Systematic elicitation of nonfunctional requirements  
* **Contextual Inquiry**: Field research combining observation and interview  
* **Requirement Analysis**: Functional and Non-Functional Requirement Analysis

## **1.3 Domain Analysis Techniques** {#1.3-domain-analysis-techniques}

* **Event Storming**: Collaborative domain discovery via timeline events  
* **Domain Storytelling**: Visualizing domain processes with stakeholders  
* **Business Process Modeling (BPMN**): Formal process notation  
* **Concept Mapping**: Visual relationships between domain concepts

## **1.4 Stakeholder Engagement Methods** {#1.4-stakeholder-engagement-methods}

* **Architecture Trade-off Analysis Method (ATAM)**: Systematic evaluation  
* **Risk-Based Design**: Prioritization based on risk exposure  
* **Cost of Delay Analysis**: Economic prioritization framework

## **1.5 Scope & Risk Definition Frameworks** {#1.5-scope-&-risk-definition-frameworks}

* **Bounded Context Canvas**: Defining domain boundaries (from DDD)  
* **Impact Mapping**: Connecting business objectives to deliverables  
* **GoalQuestionMetric (GQM)**: Systematic measurement planning  
* **Decision Records**: Capturing architectural decisions and rationale  
* **Scope Definition:** MVP vs. Roadmap planning  
* **Risk Analysis:** Threat Modeling (STRIDE), Failure Mode Analysis (FMEA)

## **1.6 Knowledge Representation Standards** {#1.6-knowledge-representation-standards}

* **Ontology Modeling**: OWL, RDF, SKOS for domain formalization  
* **Taxonomy Development**: Hierarchical classification schemes  
* **Glossary Management**: Term definition and relationship tracking  
* **Knowledge Graphs**: Graph-based relationship mapping

## **1.7 Validation & Verification Protocols** {#1.7-validation-&-verification-protocols}

* **Acceptance Criteria Definition**: INVEST criteria, Definition of Done  
* **Proof of Concept (PoC) Protocols**: Experimental validation approaches  
* **Prototyping Strategies**: Throwaway vs. evolutionary prototyping  
* **Feasibility Analysis**: Technical and business viability assessment

## **1.8 Documentation and Decision Standards** {#1.8-documentation-and-decision-standards}

* **ADRs:** Architecture Decision Records (The "Why" history)  
* **C4 Model:** Context, Containers, Components, Code (The visualization standard)

## **1.9 Knowledge Transfer & Mentoring** {#1.9-knowledge-transfer-&-mentoring}

* **Mentorship Frameworks**: Apprenticeship, guild systems  
* **Documentation Strategies**: Living documentation, code as docs  
* **Community Building**: Guilds, chapters, communities of practice  
* **Knowledge Transfer**: Knowledge transfer techniques

# **DIMENSION 2: STRUCTURAL DIMENSION** {#dimension-2:-structural-dimension}

***Purpose**: Defining system form*  
***Formal definition**: The tangible organization of the software artifacts, from the highest level of abstraction (topology) to the lowest (code).*

## **2.1 System Topology Archetypes (STA)** {#2.1-system-topology-archetypes-(sta)}

* **Monolithic**: Single deployable unit  
* **Layered (n-tier)**: Vertical separation by technical concern  
* **Client-Server**: Consumerprovider separation  
* **Microservices**: Independent service units  
* **Event-Driven**: Asynchronous event propagation  
* **ServiceOriented**: Enterprise service coordination  
* **Microkernel**: Core \+ plugins  
* **Pipes and Filters**: Linear data transformation  
* **SpaceBased**: Distributed shared memory  
* **Peer-to-Peer**: Decentralized nodes  
* **ComponentBased**: Reusable binary components

## **2.2 Internal Structure Archetypes (ISA)** {#2.2-internal-structure-archetypes-(isa)}

* **Traditional Layered**: Presentation → Business → Data  
* **Hexagonal/Ports & Adapters**: Domain at center, adapters around  
* **Onion Architecture**: Concentric circles, dependencies inward  
* **Clean Architectur**e: Entities → Use Cases → Interface Adapters  
* **Vertical Slice**: Feature-oriented organization  
* **Screaming Architecture**: Structure reveals purpose

## **2.3 Architectural Patterns (AP)** {#2.3-architectural-patterns-(ap)}

* **Presentation Patterns**: MVC, MVP, MVVM, MVI  
* **Integration Patterns**: Gateway, Aggregator, Circuit Breaker  
* **Data Patterns**: Repository, Unit of Work, Data Mapper  
* **Distribution Patterns**: Remote Facade, Data Transfer Object  
* **Decomposition Patterns**: Saga, API Composition, CQRS  
* **Coordination Patterns**: Orchestration, Choreography

## **2.4 Design Patterns (DP)** {#2.4-design-patterns-(dp)}

* **Creational**: Factory, Singleton, Builder, Prototype  
* **Structural**: Adapter, Decorator, Composite, Proxy  
* **Behavioral**: Strategy, Observer, Command, Template Method  
* **Concurrency**: Active Object, Monitor Object, Reactor

## **2.5 Programming Paradigms (PP)** {#2.5-programming-paradigms-(pp)}

* **Imperative**: Procedural, ObjectOriented  
* **Declarative**: Functional, Logic  
* **Reactive**: Reactive Extensions, Dataflow  
* **Concurrent**: Actor Model, Communicating Sequential Processes

# **DIMENSION 3: EPISTEMOLOGICAL DIMENSION** {#dimension-3:-epistemological-dimension}

***Purpose**: How we know and represent*  
***Formal definition**: The cognitive frameworks, philosophies, and guiding laws that dictate HOW we conceptualize the solution and WHY we make decisions.*

## **3.1 Domain Modeling Archetypes (DMA)** {#3.1-domain-modeling-archetypes-(dma)}

* **Domain Driven Design (DDD)**: Strategic (bounded contexts) \+ tactical patterns  
* **Data Driven Design**: Relational modeling, normalization, schemas  
* **Event Driven Modeling**: State changes as firstclass citizens  
* **ObjectOriented Analysis & Design (OOAD)**: Objects as primary abstraction  
* **Functional Domain Modeling**: Functions and data transformations  
* **User-Centric Design:** Modeling based on user workflows/journeys

## **3.2 Development Philosophies (DevPhil)**

* **Evolutionary Architecture:** Emphasize incremental change, fitness functions, and guided improvement over time.  
* **Safety-Critical / High-Assurance:** Optimize for predictability, formal proofs, redundancy, and strict change control.  
* **Lean / Minimalist:** Prefer simplicity, delay decisions, and avoid speculative complexity.  
* **Platform-First:** Treat shared capabilities as internal products (platform teams, internal developer platforms).  
* **Data-Driven / Experimentation-First:** Use experiments (A/B tests, canary analysis, causal inference) to guide decisions.  
* **Resilience-First:** Design for failure, chaos engineering, graceful degradation, and recovery.

## **3.3 Architecture Design Principles (ADP)** {#3.3-architecture-design-principles-(adp)}

* **SOLID Principles**: Single Responsibility, Open/Closed, Liskov Substitution, Interface Segregation, Dependency Inversion  
* **Coupling/Cohesion:** High Cohesion, Low Coupling  
* **The CAP Theorem:** Trade-offs between Consistency, Availability, Partition Tolerance  
*  **Package Principles**: Stable Abstractions, Stable Dependencies, etc.  
*  **Design Principles**: DRY, KISS, YAGNI, Principle of Least Astonishment  
*  **Architectural Principles**: Separation of Concerns, Information Hiding

## **3.4 Verification Methodologies (VM)** {#3.4-verification-methodologies-(vm)}

* **Formal Methods**: Model checking, theorem proving, formal verification  
* **Specification Languages**: Z notation, Alloy, TLA+  
* **Design by Contract**: Preconditions, postconditions, invariants  
* **PropertyBased Testing**: Generative testing of properties  
* **Security by Design:** Security is a constraint, not a feature  
* **Privacy by Design:** Data minimization as a default  
* **Resilience Engineering:** Designing for inevitable failure (Chaos Engineering philosophy)

# **DIMENSION 4: PROCESS DIMENSION** {#dimension-4:-process-dimension}

***Purpose**: How we build and deliver*  
***Formal definition**: The processes, practices, and human organizations that evolve the software from static code to running service.*

## **4.1 Engineering Practices (EP)** {#4.1-engineering-practices-(ep)}

* **Code-Level**: Pair Programming, Mob Programming, Code Reviews  
* **Test Practices**: TDD, BDD, Acceptance Test-Driven Development  
* **Integration Practices**: CI/CD, TrunkBased Development, Feature Flags  
* **Quality Practices**: Static Analysis, Code Metrics, Refactoring

## **4.2 Software Development Methodologies (SDM)** {#4.2-software-development-methodologies-(sdm)}

* **Plan Driven**: Waterfall, VModel, RUP  
* **Iterative**: Spiral, Incremental  
* **Agile**: Scrum, Kanban, XP, Lean Software Development  
* **Hybrid**: SAFe, LeSS, Disciplined Agile  
* **Software Delivery Cycles (SDC)**:  
* Iterative: Agile, Scrum, SAFe  
* Flow-Based: Kanban, Lean  
* Linear: Waterfall, V-Model

## **4.3 Deployment & Operations Approaches (DOA)** {#4.3-deployment-&-operations-approaches-(doa)}

* **Deployment Strategies**: BlueGreen, Canary, Rolling, A/B Testing  
* **Infrastructure Models**: Bare Metal, Virtualization, Containerization, Serverless  
* **Environment Strategies**: Dev/Prod parity, Infrastructure as Code, GitOps  
* **Release Management**: Feature Toggles, Dark Launching, Phased Rollouts

## **4.4 Team & Organizational Models (TOM)** {#4.4-team-&-organizational-models-(tom)}

* **Team Structures**: Feature Teams, Component Teams, Platform Teams  
* **Collaboration Models**: DevOps, DevSecOps, SRE, Platform Engineering  
* **Coordination Models**: Spotify Model, Team Topologies, Conway's Law application  
* **Knowledge Management**: Communities of Practice, Guilds, Documentation Strategies

## **4.5 Governance & Compliance Processes** {#4.5-governance-&-compliance-processes}

* **Architecture Governance**: Review boards, compliance checking  
* **Technical-Debt Management**: Identification, measurement, remediation  
* **Change Management**: RFC processes, impact analysis  
* **Audit & Compliance**: Security audits, regulatory compliance

# **DIMENSION 5: QUALITY DIMENSION (CrossCutting)** {#dimension-5:-quality-dimension-(crosscutting)}

***Purpose**: How well it works*  
***Formal definition**: The practices and techniques to achieve maturity, stability and resilience software that adapts across time to new requirements.*

## **5.1 Quality Attribute Approaches (QAA)** {#5.1-quality-attribute-approaches-(qaa)}

* **Operational Quality**  
  * Performance: Caching, load balancing, database optimization, CDN  
  * Reliability & Availability: Redundancy, failover, circuit breakers, retry logic  
  * Scalability & Capacity: Horizontal / vertical scaling, sharding, partitioning  
* **Code & Evolution Quality**  
  * Maintainability: Modularity, documentation, technical-debt management  
  * Testability: Test automation, test isolation, test pyramid strategy  
  * Modifiability: Clean interfaces, decoupling strategies, anti-corruption layers  
* **Security & Privacy**  
  * Security: Authentication, authorization, encryption, security patterns  
  * Privacy: Data minimization, anonymization/pseudonymization, retention policies  
* **Observability & Telemetry**  
  * Observability: Logging, metrics, tracing, health checks, structured events  
  * Telemetry: End-to-end generation, transport, storage, and querying of observability and business signals (application metrics, infrastructure metrics, logs, traces, business KPIs, user behavior events), with defined retention, sampling, and privacy policies.  
* **User & Ecosystem Quality**  
  * Usability & UX: Interaction design, accessibility (WCAG), user feedback loops  
  * Portability: Multi-platform support, cloud-provider independence, containerization  
  * Sustainability: Resource efficiency, cost optimization, carbon footprint awareness

## **5.2 Compliance & Standards (CS)** {#5.2-compliance-&-standards-(cs)}

* **Regulatory**: HIPAA, GDPR, PCIDSS, SOC2  
* **Industry Standards**: ISO/IEC 25010 (Quality Model), ISO/IEC 42010 (Architecture Description)  
* **Accessibility**: WCAG, Section 508, ARIA  
* **Internationalization**: Unicode, Locale Management, Time Zone Handling  
* **Security Standards**: ISO/IEC 27001

# 

# **THE UNIVERSAL ARCHITECTURE SPECIFICATION TEMPLATE** {#the-universal-architecture-specification-template}

When documenting an architecture, specify coordinates in all dimensions:

**Project: XXX System**

D1: KNOWLEDGE PLANE  
  D1.1 Research (RM): Ethnographic studies \+ competitive analysis  
  D1.2 Requirements (REA): Use Case modeling \+ Quality Attribute Workshop  
  D1.3 Domain Analysis (DA): Event Storming sessions conducted  
  D1.4 Scope (SCOPE): 3 bounded contexts (Measurement, Analysis, User Management)

D2: STRUCTURAL DIMENSION  
  D2.1 STA: Event-Driven for measurements (STA.EVENT\_DRIVEN), Microservices for user data (STA.MICROSERVICES)  
  D2.2 ISA: Clean Architecture (ISA.CLEAN) per service  
  D2.3 AP: CQRS for analysis service (AP.CQRS), Saga pattern for user workflows (AP.SAGA)  
  D2.4 DP: Repository, Factory, Strategy (DP.REPOSITORY, DP.FACTORY, DP.STRATEGY)  
  D2.5 PP: OO (Java) with functional elements (Kotlin) (PP.OO \+ PP.FUNCTIONAL)

D3: EPISTEMOLOGICAL DIMENSION  
  D3.1 DMA: DDD for user domain (DMA.DDD), Data-Driven for measurement ingestion (DMA.DATA\_DRIVEN)  
  D3.2 DevPhil: Evolutionary architecture \+ Resilience-first (DEVPHIL.EVO, DEVPHIL.RESILIENCE)  
  D3.3 ADP: SOLID principles, package principles  
  D3.4 VM: Design by Contract for critical interfaces (VM.DBC)

D4: PROCESS DIMENSION  
  D4.1 EP: TDD \+ pair programming for core logic (EP.TDD, EP.PAIR)  
  D4.2 SDM: Scrum with 2-week sprints (SDM.SCRUM\_2W)  
  D4.3 DOA: Containerization (Docker), Kubernetes, Blue-Green deployments (DOA.DOCKER, DOA.K8S, DOA.BLUE\_GREEN)  
  D4.4 TOM: Feature teams aligned with bounded contexts, DevOps culture (TOM.FEATURE\_TEAMS, TOM.DEVOPS)

D5: QUALITY DIMENSION  
  D5.1 QAA:  
    \- Performance: \<50ms p95 for measurements, \<2s for historical queries (QAA.LATENCY)  
    \- Reliability: 99.9% uptime SLA, automated failover (QAA.RELIABILITY)  
    \- Security: HIPAA compliance, end-to-end encryption for medical data (QAA.SECURITY, CS.HIPAA)  
    \- Observability & Telemetry: structured logging, metrics dashboards, distributed tracing (QAA.OBSERVABILITY)  
  D5.2 CS: HIPAA, ISO/IEC 27001 alignment, WCAG AA for patient UI

## **NEXT STEPS FOR STANDARDIZATION** {#next-steps-for-standardization}

1\. Formalize each dimension with exhaustive lists  
2\. Define decision trees for navigating each dimension  
3\. Create relationship matrices showing compatible choices  
4\. Develop assessment frameworks for evaluating architectures  
5\. Publish reference implementations showing complete specifications

This taxonomy provides the precision you've been seeking while acknowledging the complexity of architectural decisionmaking.

## **Architecture Decision Framework** {#architecture-decision-framework}

A. Decision Context Analysis  
   \- Stakeholder identification  
   \- Constraint analysis  
   \- Assumption validation  
   \- Risk assessment

B. Option Generation  
   \- Brainstorming techniques  
   \- Pattern application  
   \- Trade-off analysis  
   \- Prototyping approaches

C. Evaluation Criteria  
   \- Functional suitability  
   \- Quality attribute satisfaction  
   \- Cost-benefit analysis  
   \- Risk mitigation

D. Decision Documentation  
   \- Architecture Decision Records (ADR)  
   \- Rationale documentation  
   \- Alternative analysis  
   \- Impact assessment

## **Maturity Assessment Matrix** {#maturity-assessment-matrix}

For each dimension, provide:

1. **Level 0 (Ad-hoc)**: No formal processes  
2. **Level 1 (Initial)**: Basic awareness  
3. **Level 2 (Defined)**: Documented approaches  
4. **Level 3 (Managed)**: Measured and controlled  
5. **Level 4 (Optimized)**: Continuous improvement

