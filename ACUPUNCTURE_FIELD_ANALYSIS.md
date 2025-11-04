### This read decides that what modules/layouts I am keeping for the Acupuncture practice.

| OpenEMR Feature           | Acupuncture Needs? | Action                             |
| ------------------------- | ------------------ | ---------------------------------- |
| Demographics              | ✅ YES              | KEEP- core patient info            |
| Scheduling/Calendar       | ✅ YES              | KEEP- essential                    |
| Encounters/SOAP Notes     | ✅ YES              | KEEP + CUSTOMIZE                   |
| Medical History           | ✅ YES              | KEEP + ADD TCM fields              |
| Social History            | ✅ YES              | KEEP- lifestyle data               |
| Medications               | ✅ YES              | KEEP- drug interactions matter     |
| Allergies                 | ✅ YES              | KEEP- safety critical              |
| Insurance/Billing         | ✅ YES              | KEEP + SIMPLIFY                    |
| Reports                   | ✅ YES              | KEEP- practice analytics           |
| Document Management       | ✅ YES              | KEEP- consent forms                |
| Prescriptions/eRx         | ❌ NO               | HIDE- not applicable               |
| Lab Orders                | ❌ NO               | HIDE- not applicable               |
| Radiology Orders          | ❌ NO               | HIDE- rare use case                |
| Immunizations             | ❌ NO               | HIDE- not applicable               |
| Clinical Decision Support | ❌ NO               | HIDE- not applicable               |
| Procedures (surgical)     | ❌ NO               | HIDE- not applicable               |
| Patient Portal (full)     | ⚠️ PARTIAL         | SIMPLIFY- only appointment booking |

Here’s a **clear, combined and organized list of data points** for your `ACUPUNCTURE_FIELD_ANALYSIS.md`—ready for copy-paste into your documentation:

***

# ACUPUNCTURE_FIELD_ANALYSIS.md

## **Acupuncture EHR: Essential Data Points**

### **1. Patient Demographics**
- Full Name
- Date of Birth, Age
- Sex/Gender
- Address (Street, City, State, Zip)
- Home Phone, Mobile Phone, Work Phone
- Email
- Occupation, Employer
- Marital Status
- Number of Children
- Age(s) of Children
- Dominant Hand
- Preferred Appointment Reminder Method (Text, Email, Phone, None)

***

### **2. Emergency & Insurance Contact**
- Emergency Contact Name, Relationship, Phone
- Primary Care Physician Name, Phone
- Insurance Provider, Policy Number, Group Number, Subscriber
- Referral Source (How did you hear about us?)

***

### **3. Chief Complaint & Visit Reason**
- Primary Health Concern (Reason for Visit)
- Secondary/Tertiary Complaints
- Duration of Each Complaint
- Previous Acupuncture Treatment (Yes/No)
- Name of Previous Acupuncturist
- Symptom Pattern/Timing (better/worse times of day)
- Aggravating & Relieving Factors
- Impact on Daily Activities (work, sleep, exercise)
- Symptom Progression (improved/worsened/same)

***

### **4. Pain Assessment (if applicable)**
- Pain Location (body diagram or text)
- Pain Quality (aching, stabbing, burning, etc.)
- Pain Now (0-10 scale)
- Average Pain Level (0-10)
- Pain at Best and Worst (0-10)
- Acceptable Pain Level (goal)
- Pain Radiation (Yes/No, where)
- Motivation Level for Resolution (0-10)

***

### **5. Medical History**
- High/Low Blood Pressure, Heart Disease, Stroke, Palpitations, Chest Pain
- Respiratory Problems (Asthma, Shortness of Breath)
- Musculoskeletal (Arthritis, Joint/Muscle Pain)
- Neurological (Headaches, Dizziness, Seizures)
- Gastrointestinal (Constipation, Diarrhea, etc.)
- Genitourinary (UTIs, Kidney issues)
- Endocrine (Diabetes, Thyroid, Hypo/Hypoglycemia)
- Cancer History
- Infectious Disease Status (Hepatitis, HIV, etc.)
- Mental Health (Anxiety, Depression, Panic Attacks)
- Autoimmune (Lupus, Fibromyalgia)
- Allergies (medications, latex, foods, scents)

***

### **6. Women's Health**
- Pregnant Now? (Yes/No/Maybe)
- Possibly Pregnant? (Yes/No)
- Birth Control/Menstrual Details
- Age at First Period
- Last Menstrual Period (LMP)
- Menstrual Cycle Length and Flow Quality
- Menstrual Pain/PMS Symptoms
- Menopausal Status/Symptoms
- Fertility Issues
- Pregnancies/Births/Miscarriages
- Gynecological Conditions (fibroids, cysts, endometriosis)

***

### **7. Men's Health**
- Prostate Health
- Erectile Function
- Libido
- Testicular Pain/Swelling

***

### **8. Medications & Supplements**
- Current Medications (Name, Dose, Reason, Duration)
- Supplements/Herbs (Name, Dose, Duration)
- Blood Thinners
- Antidepressants or significant medication classes

***

### **9. Safety Screen/Red Flags**
- Pacemaker (Yes/No)
- Seizure History (Yes/No)
- Bleeding/Clotting Disorders (Yes/No)
- Allergies (Highlighted prominently)

***

### **10. Lifestyle & Habits**
- Smoking/Vaping (status, amount, years)
- Alcohol Intake (type, frequency)
- Caffeine Intake (type, amount)
- Water Intake (glasses/day)
- Exercise Habits (type, frequency)
- Sleep Quality/Quantity
- Stress Level (0-10)
- Diet (vegetarian, type, restrictions)

***

### **11. Review of Systems**
- Energy Level (low/normal/high)
- Appetite (low/normal/high)
- Digestion (ease, symptoms)
- Urination (frequency, issues)
- Body Temperature (tends to feel hot/cold)
- Sweating Patterns (normal, night sweats, little/too much)
- Immune system/frequent infections

***

### **12. TCM-Specific/Encounter Data**
- Tongue Diagnosis (color, coating, shape, moisture)
- Pulse Diagnosis (quality, rate, depth)
- Meridians/Channels Affected
- TCM Pattern Diagnosis (written description)
- Acupuncture Points Used
- Needle Depth/Retention Time
- Adjunct Therapies Used (cupping, moxa, gua sha, Tui-Na)
- Patient Response to Treatment (improved, unchanged, worse)
- Treatment Plan/Next Steps
- Detailed Session Notes

***

### **13. Consent & Legal**
- Informed Consent for Acupuncture
- HIPAA Acknowledgment (privacy)
- Payment/Cancellation Policy Signature
- Credit Card Authorization (if used)

***

**This list is based on:**
- Two real intake forms - EHW Acupuncture and Meridian Wellness Patient Intake Form
- Industry and EHR best practices
- Typical requirements for safe, legally compliant and effective acupuncture clinical records

***

**Let me know when you have this in your documentation and ready for the next micro-step!**