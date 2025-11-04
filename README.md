# Acupuncture Clinic EMR System

Custom implementation of OpenEMR for an acupuncture clinic as part of a student portfolio project.

---

## Project Overview

This repository contains a customized installation and documentation for OpenEMR, tailored for the workflow of a solo-practitioner acupuncture clinic.  
It demonstrates installation, clean project setup, safe version control, and practical customizations using modern open-source EHR tools.

**Student:** Pratham Kabra  
**Program:** Applied Business Analytics  
**Institution:** Boston University  
**Project Start Date:** November 3, 2025

---

## Goals

- Streamline scheduling and patient management for acupuncture workflows
- Build and customize intake forms for acupuncture data collection
- Improve user interface for ease of use
- Ensure HIPAA compliance readiness (for future cloud deployment)
- Support insurance billing procedures
- Document every installation and customization step for learning and demonstration

---

## Technology Stack

- **EMR Platform:** OpenEMR (v7.x.x, open-source)
- **Web Server:** MAMP (macOS, local deployment)
- **Database:** MySQL
- **Backend:** PHP
- **Frontend:** HTML, CSS, JavaScript
- **Code Editor:** Visual Studio Code
- **Version Control:** Git and GitHub

---

## Installation and Setup Guide

### Prerequisites

- MacBook (Apple Silicon M3, macOS Ventura/Sonoma)
- MAMP (free version)
- Visual Studio Code

### Steps

1. **Install MAMP on macOS**
   - Download: [https://www.mamp.info/en/downloads/](https://www.mamp.info/en/downloads/)
   - Install and Start Apache/MySQL servers

2. **Clone this repository**
   - git clone https://github.com/PrathamKabra/EHR.git
   - cd EHR

3. **Move repository contents to MAMP htdocs**
- Place all code in: `/Applications/MAMP/htdocs/openemr`

4. **Create the MySQL database**
- Access phpMyAdmin: `http://localhost:8888/phpMyAdmin`
- Create a database named `openemr`

5. **Start the OpenEMR setup wizard**
- Go to: `http://localhost:8888/openemr`
- Follow installation prompts

6. **Login and Begin Customization**
- Default admin login (set during install)
- Visit the “Administration” panel to edit layouts/forms

---

## Project Milestones

- [x] Local development environment set up (MAMP, MySQL, VS Code)
- [x] OpenEMR installed and connected to database
- [x] Version control cleaned and GitHub connected
- [x] README/documentation created
- [ ] Custom acupuncture intake form (in progress)
- [ ] Dashboard UI improvements (planned)
- [ ] Insurance billing workflow demo (planned)
- [ ] Data export for cloud migration (future milestone)

---

## Customizations (Planned & Ongoing)

- Acupuncture-specific patient intake templates
- Enhanced patient scheduling and reminders
- Meridian mapping integration
- Acupuncture treatment note forms
- Visual improvements to dashboard and encounter screens
- Example insurance billing setup for acupuncture codes

---

## Resources

- [OpenEMR Official Site](https://www.open-emr.org)
- [OpenEMR Documentation Wiki](https://wiki.open-emr.org)
- [OpenEMR GitHub](https://github.com/openemr/openemr)
- [Community Forums](https://community.open-emr.org)

---

## License & Credits

OpenEMR is licensed under GNU GPL.  
This repository is part of a student educational initiative and is not for clinical use.

---

## Contact

**Pratham Kabra**  
Boston University — Applied Business Analytics  
GitHub: [https://github.com/PrathamKabra](https://github.com/PrathamKabra)

*For questions, portfolio, or collaboration, feel free to reach out through GitHub.*

