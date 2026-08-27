# Akeeba Build Tools — Public Packager

Phing helper to build installable Joomla!® extension and WordPress plugin ZIP package files.

This minimal Phing script is made for use with Akeeba software for Joomla and WordPress. It will assemble all the files in our public repositories into installable ZIP packages. You can install these ZIP packages on your own site.

> [!IMPORTANT]
> Akeeba Build Tools — Public Packager does not install Composer dependencies, NPM dependencies, or do JS and CSS compilation / minification. It only operates on the files which already exist on disk.
>
> Akeeba Build Tools — Public Packager does not allow you to do release automation. All release targets and their associated tooling are neutered in this version so that this repository does NOT classify as a “product with digital elements” under the EU CRA.

Akeeba Build Tools — Public Packager is NOT a standalone builder in the sense of building a whole project from a bare checkout; it needs an extension-specific Phing build file and an already-resolved source tree to work from. It is deliberately kept separate from our internal [akeeba/buildfiles](https://github.com/akeeba/buildfiles), Akeeba Ltd's internal build tooling, which does considerably more (and does talk to the network).

## Usage

1. Resolve your own dependencies first: `composer install`, `npm install`, or whatever your project needs. This script does not do it for you.
2. Point this script at your prepared source tree using an extension-specific Phing build file.
3. Run `phing` to produce the installable ZIP in your release directory.

## Why is there no Composer, NPM, JS/CSS building, or release automation?

Installing Composer dependencies requires network access. Installing the tooling necessary for JS/CSS compilation and minification requires network access. Release automation requires network access, obviously.

Having anything which directly or indirectly requires network access in this repository, or us telling you how to do the same yourself, would classify this repository as a “product with digital elements” under the EU CRA. This would require time-consuming red tape which would make it financially non-viable for us to publish Free and Open Source Software without charging a fee.

We had two options. We could either stop publishing our free software, or create a cut-down version of our build and release automation tooling which removes everything that needs network access. We chose the latter.

You can still build installable packages of our software – that's the whole point! We _do_ ship both the compiled / minified CSS and JS files, and their corresponding sources. This lets you build the same package we build and distribute ourselves. However, if you do make any modifications to the sources you have to provide your own tooling and process to produce the compiled / minified CSS and JS files. Regrettably, we cannot help you with that.

If you think that is absurd, and you're an EU citizen, we urge you to write to your European Parliament representatives to tell them how and why the EU CRA negatively affects you.

## Regulatory status (EU Cyber Resilience Act)

This repository contains a minimal Phing build script that assembles an installable extension ZIP package from an already-prepared source tree and a `vendor/` directory populated by the user beforehand and under their own control. It makes no network connections of its own, has no dependency-resolution or fetch logic, and its intended and foreseeable use is limited to local file packaging. It is not a "product with digital elements" as defined in Art. 3(1) of Regulation (EU) 2024/2847 (the Cyber Resilience Act), which requires intended or foreseeable use involving a direct or indirect connection to a device or network. It is published to satisfy GPLv3's "Corresponding Source" requirement and to support reproducible builds by third parties. This statement reflects our assessment as of 27 August 2026 and will be revisited if that scope changes.

## COPYRIGHT AND DISCLAIMER

Akeeba Build Tools — Public Packager

Copyright (c) 2010-2026 Nicholas K. Dionysopoulos / Akeeba Ltd

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.