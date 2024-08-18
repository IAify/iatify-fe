# IAify Project: Deployment and Configuration Guide

## Overview

This repository contains the codebase for the IAify project, including configurations for both production and development environments. The project is hosted on a Contabo server, with separate Apache virtual hosts configured for production and development. This document provides instructions on the deployment process, server setup, and SSL certificate management.

## Repository Structure

The project is divided into two environments:
- **Production**: Hosted at `iatify.com`
- **Development**: Hosted at `app.iatify.com`

The deployment is automated using GitHub Actions, ensuring that updates pushed to the respective branches are deployed to the correct environment on the server.

## Deployment Process

### 1. **GitHub Actions Pipeline**

The repository is configured with a GitHub Actions pipeline that automates the deployment process to the Contabo server. The pipeline is triggered on every push to the `master` and `development` branches.

- **Pipeline Configuration**: The pipeline is defined in the `.github/workflows` directory within the repository.
  - **Production Deployment**: Updates pushed to the `master` branch are deployed to `/var/www/html/iatify-prod`.
  - **Development Deployment**: Updates pushed to the `development` branch are deployed to `/var/www/html/iatify-dev`.

### 2. **Apache Configuration**

Apache is configured to host the production and development environments separately.

- **Production (`iatify.com`)**:
  - **Configuration File**: `/etc/apache2/sites-available/iatify.com.conf`
  - **DocumentRoot**: `/var/www/html/iatify-prod`
  
- **Development (`app.iatify.com`)**:
  - **Configuration File**: `/etc/apache2/sites-available/app.iatify.com.conf`
  - **DocumentRoot**: `/var/www/html/iatify-dev`

After making any changes to these configurations, the Apache service should be reloaded:

```bash
sudo systemctl reload apache2
