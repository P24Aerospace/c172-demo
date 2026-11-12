P24 AEROSPACE — CESSNA 172S PUBLIC DEMO

WORDPRESS INSTALLATION (for sites that support custom plugin uploads):
1. WordPress Dashboard > Plugins > Add Plugin > Upload Plugin.
2. Upload the P24_Aerospace_C172S_WordPress_Demo.zip package, then install and activate.
3. Edit the page where you want to show the trainer.
4. Remove any old demo iframe or shortcode, add a Shortcode block, and enter:
   [c172_demo]
5. Save/publish, then test Start Demo and the passenger briefing audio.

The WordPress plugin expects demo/index.html inside its ZIP package.
This package contains only the public demo, NOT your separate private Creative Studio ZIP.

GITHUB PAGES:
If you are publishing with GitHub Pages instead of WordPress, you do not need the PHP plugin. Upload the public trainer as index.html to your GitHub Pages repository.

IMPORTANT: Browser-delivered HTML, JavaScript, and embedded audio can be inspected or copied by site visitors. Keep private development materials out of public hosting.
