# Setup and Installation Log

## Environment Details

**Date:** November 3, 2025  
**Device:** MacBook Pro M3  
**OS:** macOS [your version]  
**MAMP Version:** [version]

---

## Installation Steps Completed

### 1. Environment Setup ✅
- Installed MAMP (free version)
- Configured Apache (Port 8888) and MySQL (Port 8889)
- Installed VS Code with extensions:
  - PHP Intelephense
  - GitLens
  - HTML CSS Support

### 2. OpenEMR Installation ✅
- Downloaded OpenEMR v7.x.x
- Extracted to `/Applications/MAMP/htdocs/openemr`
- Created MySQL database: `openemr`
- Ran setup wizard successfully
- Selected theme: [your theme choice]

### 3. Database Configuration ✅
- Host: localhost
- Port: 8889
- Database Name: openemr
- Username: root
- Password: root (development only)

### 4. Version Control Setup ✅
- Removed OpenEMR's 7000+ commit history
- Initialized fresh Git repository
- Connected to GitHub: https://github.com/PrathamKabra/EHR
- Created clean first commit
- Resolved merge conflicts
- Successfully pushed to remote

### 5. Documentation ✅
- Created custom README.md
- Created SETUP_LOG.md
- Committed documentation to GitHub

---

## Test Data Created

### Patients
- John TestPatient (DOB: 01/15/1980)

### Appointments
- [Date/Time of test appointment]

### Encounters
- Test encounter: Lower back pain

---

## Issues Encountered & Solutions

### Issue 1: Git Merge Conflict
**Problem:** README.md conflict when pulling from GitHub  
**Solution:** Used VS Code conflict resolver, accepted incoming changes

### Issue 2: [Document future issues here]
**Problem:**  
**Solution:**

---

## URLs and Access

- **OpenEMR:** http://localhost:8888/openemr
- **phpMyAdmin:** http://localhost:8888/phpMyAdmin
- **GitHub Repo:** https://github.com/PrathamKabra/EHR

---

## Next Steps

- [ ] Explore all OpenEMR modules
- [ ] Create additional test patients
- [ ] Research acupuncture form customization
- [ ] Plan UI improvements
- [ ] Document first customization
