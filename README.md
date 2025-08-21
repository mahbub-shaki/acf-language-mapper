
# acf-language-mapper

![WordPress](https://img.shields.io/badge/WordPress-6.x-blue?style=for-the-badge&logo=wordpress)
![Bootstrap 5](https://img.shields.io/badge/Bootstrap-5-purple?style=for-the-badge&logo=bootstrap)
![ACF Free](https://img.shields.io/badge/ACF-Free-green?style=for-the-badge&logo=advanced-custom-fields)

A **clean, modular WordPress theme** built with **Bootstrap 5**, designed for **dynamic section-based layouts**.  
This theme demonstrates a **custom multilingual switcher** (English ↔ বাংলা) using **ACF Free** and WordPress page templates.

---

## 🎬 Language Switch Preview

**Preview the language switch using screenshots:**  

![Language Switch Demo](screenshots/demo-language-switch.gif)

---
 
## ✨ Key Features

- ✅ **Bootstrap 5** fully integrated  
- 🧩 **Modular File Structure** (`inc/` folder for reusable PHP code)  
- 🏷️ **Custom "Alternate Language Page" Field** via ACF Free  
- 🌐 **Dynamic Language Switcher Button**:  
  - বাংলা page → shows **Switch to English**  
  - English page → shows **Switch to বাংলা**  
- ⚡ **Ready-to-Use WordPress Theme Structure**  
- 🔧 **Clean & Extendable Base** for future projects  

---

## 📂 Theme File Structure
```text
acf-language-mapper/
│── inc/ # Future modular PHP files (.gitkeep included)
│── screenshots/ # Documentation screenshots
│ ├── switch-to-english.png
│ ├── switch-to-bangla.png
│ ├── acf-alternate-language-field.png
│ └── about-page-alternate-selected.png
│── footer.php
│── functions.php
│── header.php
│── index.php
│── page.php
│── single.php
│── style.css
│── README.md

```
---

## 🗂️ Alternate Language Feature (ACF Free)

This theme includes a **language switch button** that automatically shows on pages with an alternate language assigned.

### How to Set It Up:
1. Install **Advanced Custom Fields (Free version)** plugin  
2. Go to **Custom Fields → Add New Field Group**  
3. Create a field with these settings:  
   - **Field Label:** `Alternate Language Page`  
   - **Field Name:** `alternate_language_page`  
   - **Field Type:** `Page Link`  
   - **Filter by Post Type:** `Page`  
   - **Filter by Post Status:** `Published`  
   - **Allow Multiple:** ❌ Off  
   - **Conditional Logic:** ❌ Off  
4. Assign the field group to **Pages**  
5. Edit a page and select its **alternate language page**  

### Output:
- On the front-end, the theme automatically displays a **Bootstrap-styled language switch button** if an alternate page is selected.  
- Button label changes based on the current page slug:  
  - Example:  
    ```php
    <a class="btn btn-outline-primary ms-3" href="URL_OF_ALTERNATE_PAGE">Switch to English / Switch to বাংলা</a>
    ```
  ---  

## 🖼️ Screenshots

### Language Switch in Action
**বাংলা Page →**  
![Switch to English](screenshots/switch-to-english.png)

**English Page →**  
![Switch to বাংলা](screenshots/switch-to-bangla.png)

### ACF Setup
**Alternate Language Field Group →**  
![ACF Field](screenshots/acf-alternate-language-field.png)

**Page Editor (About Page with Alternate Selected) →**  
![About Page Alternate](screenshots/about-page-alternate-selected.png)

---

## ⚙️ Installation Guide

1. 📥 Download or clone this repository  
2. 📂 Copy the folder into `wp-content/themes/`  
3. ✅ Activate **acf-language-mapper** from the WordPress dashboard  
4. 🌐 Create your pages in **English** and **বাংলা**  
5. 🏷️ Use the **ACF "Alternate Language Page"** field to link between the two pages  

---

## 🛠️ Requirements

![WordPress 6.0+](screenshots/wordpress-6.svg)
![Advanced Custom Fields (ACF Free)](screenshots/acf-free-green.svg)
![Bootstrap 5](screenshots/bootstrap-5-purple.svg)

---

> ⚠️ Note: This is a WordPress theme. To view or use it fully (with dynamic features like language switcher), you need a local WordPress environment (e.g., XAMPP, WAMP, or a live server). GitHub Pages cannot run PHP, so dynamic features won't work there.

---

## 📜 License

This theme is open-source and free to use under the **MIT License**.  
Include a `LICENSE` file in your repository for best practice.

---

## 👨‍💻 Developer & Contact

**Developed by:** MahbubShaki  
  
🌐 **Upwork Profile:** [MahbubShaki on Upwork](https://www.upwork.com/freelancers/~015df70a23d7f58180)  
📧 Email: mahbubshaki64@gmail.com

---


