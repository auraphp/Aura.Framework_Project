# Aura.Framework_Project

Unlike Aura libraries, this Project package has dependencies. It composes
various libraries and kernels into a minimal framework for web and CLI
applications.

By "minimal" we mean *very* minimal. The project provides only a dependency
injection container, a configuration system, a web router, a web dispatcher, a
pair of web request and response objects, a CLI dispatcher, and a logging
instance.

This minimal implementation should not be taken as "restrictive". The DI
container, coupled with the kernel's two-stage configuration, allows a wide
range of programmatic service definitions. The router and dispatchers are
built with iterative refactoring in mind, so you can start with
micro-framework-like closure controllers, and work your way into more complex
controller objects of your own design.

## Foreword

TBD

## Getting Started

Install via Composer to a `{$PROJECT_PATH}` of your choosing:

    composer create-project --stability=dev aura/framework-project {$PROJECT_PATH}
    
This will create the project skeleton and install all of the necessary
packages.

The web portion of the framework is identical to an [Aura.Web_Project][].

The CLI portion of the framework is identical to an [Aura.Cli_Project][].

[Aura.Web_Project]: https://github.com/auraphp/Aura.Web_Project
[Aura.Cli_Project]: https://github.com/auraphp/Aura.Cli_Project
