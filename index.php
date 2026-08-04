<?php
/**
 * Shinobi Architect Portfolio
 * Main Entry Point
 */

$pageTitle = "Portofolio Saya - Jusman Hakim";

// Include Header & Navbar
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<main class="overflow-hidden">
    <?php
    // Include Portfolio Sections
    require_once 'sections/hero.php';
    require_once 'sections/about.php';
    require_once 'sections/skills.php';
    require_once 'sections/portfolio.php';
    require_once 'sections/contact.php';
    ?>
</main>

<?php
// Include Footer
require_once 'includes/footer.php';
?>