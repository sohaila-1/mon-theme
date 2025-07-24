# 🎨 Mon Thème WordPress – ESGI Project

Ce projet est un thème WordPress personnalisé développé dans le cadre d’un exercice de création de site vitrine. Il suit une architecture propre et modulaire, intégrant des sections dynamiques, un design responsive, et une personnalisation via le WordPress Customizer.

---

## 🚀 Fonctionnalités principales

- **Hero Section dynamique** : image, titre, bouton modifiables depuis l’admin.
- **Section About** : présentation stylisée de l’entreprise.
- **Nos Services** : 3 services configurables (titre, image, nom).
- **Corp. Parties** : bloc de mise en avant avec image plein écran + description.
- **Nos Partenaires** : logos de partenaires affichés horizontalement.
- **Page 404 personnalisée**
- **Menus dynamiques & logo personnalisé**
- **SASS utilisé pour le style (préprocesseur SCSS)**

---

## 📁 Architecture du projet
mon-theme/
├── assets/ # Ressources front
│ ├── css/
│ ├── images/
│ ├── js/
│ └── scss/
├── inc/ # Configuration PHP
│ ├── customizer.php
│ ├── enqueue.php
│ └── setup.php
├── templates/parts/ # Sections HTML réutilisables
├── page-services.php # Template page Services
├── about-template.php # Template page About
├── 404.php # Page d’erreur
├── comments.php # Gestion commentaires
└── .wp-env.json # Environnement local (facultatif)

## ⚙️ Installation

1. Placer le dossier `mon-theme` dans `wp-content/themes/`
2. Activer le thème via l’interface d’administration WordPress
3. Aller dans **Apparence > Personnaliser** pour configurer :
   - Le titre principal
   - Les images des services
   - Le lien du bouton principal
   - Les logos partenaires, etc.

---

## 🧪 Technologies utilisées

- PHP (WordPress)
- HTML / SCSS / CSS
- JavaScript (basique pour interactions)
- WordPress Customizer API

---

👥 Auteurs
Elkhadar Adham

Nachafi Souhaila

---

## 📄 Licence

Projet réalisé dans un but pédagogique (ESGI 2025). Toute réutilisation est autorisée avec mention.