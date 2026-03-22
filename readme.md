## Assignment 3: WordPress Child Theme

### Child Themes

In this project I created a child theme based on my Assignment 2 theme. A child theme allows me to make changes without editing the parent theme files, so my work is safe if the parent updates. The connection between both themes is made using the Template: field in style.css, which must match the parent theme folder name.

### Template Hierarchy

WordPress uses the template hierarchy to decide which file to load for each page. When a child theme is active, WordPress checks the child theme first before the parent theme. For example, I added a single.php file in my child theme. When WordPress loads a single post, it finds my child theme version first and uses it instead of the parent version. This is why my custom layout is displayed on single posts.

### Real-World Reflection

In my child theme, I changed the layout of the page.php file to include a sidebar with recent posts. This helps users quickly see other news while reading a page. It improves the experience because readers can explore more content without leaving the page.