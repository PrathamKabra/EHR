### Refer the changes I made from the Admin >> Config >> 
Here’s a **compiled summary of all configuration changes and best practices** for your acupuncture-focused OpenEMR instance. Use this in your project documentation, team handoff, or portfolio!

***

# **OpenEMR Configuration for Acupuncture Clinic – Complete Settings Summary**

***

## **APPEARANCE & UI**
- Tabs Layout Theme: **Compact** for minimal clutter
- General Theme: **Cobalt Blue** or **Light** for clarity
- Hide dashboard cards: **Labs, Prescriptions, Disclosures, Amendments, Insurance**
- Vertical Menu Style: **Sliding**
- Patient Search Results: **Dual** or **Comprehensive** for fewer clicks
- Default Encounter View: **Clinical View**
- Encounters per Page: **Show All** or **10/20** for easier daily workflow

***

## **FEATURES**
- Application Type: **None**
- Drugs/Inventory: **Do not inventory and sell any products**
- Disable: **Chart Tracker, Immunizations, Prescriptions, User Groups, Multi-Provider Events**
- Enable: **Text Templates in Encounter Forms**
- Omit Employers: **Enabled**
- Skip Authorization of Notes: **Enabled** (for solo provider)
- Allow Encounter Claims: **Enabled** if billing insurance (otherwise, off)
- Encryption strong: **Enabled**

***

## **E-SIGN**
- Enable E-sign on entire encounter and forms: **Enabled**
- Lock signed records: **Enabled**
- Hide empty e-sign logs on reports: **Enabled**
- Only include e-signed reports: **Optional**
- No manual unlocks unless required

***

## **DOCUMENTS**
- Document Storage Method: **Hard Disk**
- Ignore CouchDB settings unless cloud/multi-site
- Generate thumbnails: **Enabled** for easier browsing

***

## **CALENDAR & FLOW BOARD**
- Past Appointment Display: **3** (shows last 3 visits)
- Providers See Entire Calendar: **On/Off** (based on solo vs group)
- Auto-Create New Encounters: **One Encounter Per Day**
- Flow Board: **Disable** if not using, or keep minimal display fields

***

## **INSURANCE**
- Enable Insurance Eligibility: **Off** (unless required)
- Simplified Demographics: **On**
- Show Additional Insurance Info: **None** or **Address Only**
- Disable Insurance Reports Download: **On**
- Allow only one insurance: **Enabled**

***

## **SECURITY**
- Show SQL: **Do not show**
- Session Timeout: **900** seconds (15 min)
- Secure Upload: **Enabled**
- Strong Password Policy: **Enabled, Minimum length 8**
- Password Expiration: **90 days** (optional)
- Login Block: **5 failed attempts**, lock for 900 seconds

***

## **NOTIFICATIONS**
- Email: Set Sender Name and Email to your clinic’s address
- Email method: **SMTP** (use Gmail with App Password)
- Notification/Reminder Hours: **8AM–6PM**
- SMS/Phone: **Skip** unless using Twilio/etc.

***

## **CLINICAL DECISION/REMINDERS**
- CDR: **Disabled**
- Allergy Check: **Enabled**
- Birthday Alerts: **Off**

***

## **PATIENT PORTAL**
- Initially: **Disabled** until ready to roll out to real patients
- Enable: View records, request appointments (when ready)
- Registration/Self-Service: **Enable only when reCAPTCHA is set up**
- Branding: Adjust logos, menu height as needed

***

## **API/INTEGRATIONS**
- FHIR/API/Connectors: **All disabled** unless actively developing integrations
- Payment Gateway: **Disabled** unless taking in-person/online card payments

***

## **RX / PRESCRIPTIONS**
- **All Rx Settings: Disabled** (unless legally prescribing)

***

## **PDF SETTINGS**
- Layout: **Portrait**
- Paper Size: **Letter (USA)** or **A4 (Int’l)**
- Font: **10–12pt**
- Output: **Download**
- Address & Barcode Labels: **None** (unless mailing or inventory)

***

## **ENCOUNTER FORM**
- Default Reason: **Blank** or “Acupuncture Session”
- Default Category: **Office Visit**
- Follow-Up Encounters: **Enabled**
- Date of Service: **Show on New/Edit**
- Referral/Discharge/Ordering Provider: **Hide**
- Link/Add Issues: **Enabled**
- Sensitivity/Collections: **Hide**

***

## **QUESTIONNAIRES**
- LOINC Note Display: **Do not display**
- Display Style: **OpenEMR Auto Select Dark/Light**
- Full Screen: **Default (on)**

***

## **CARE COORDINATION / CCD-CCDA**
- Max Sections to Display: **5** (or blank for unlimited)
- Document Section Order (all templates):  
  **1. Allergies, 2. Problem List, 3. Clinical Notes, 4. Treatment Plan, 5. Encounters, 6. Social History, 7. Vitals**
- Skip unnecessary sections (immunizations, equipment, imaging)

***
