<?php
session_start();
$page_title = "Search Results";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title><?= htmlspecialchars($page_title) ?> | Brew & Go</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <header class="parallaximage">
        <img src="Images/logob&g.png" alt="Brew and Go logo" class="logomain" />
        <h1 class="headertitle">Brew & Go.</h1>
    </header>

    <?php include 'navigationbar.php'; ?>

    <main class="stan-confirmation-container"> 
        <h2 class="stan-confirmation-title">Search Results</h2>

        <?php
        $search_query = "";
        if (isset($_GET['query']) && !empty(trim($_GET['query']))) {
            $search_query = htmlspecialchars(trim($_GET['query']));
            echo "<p class='stan-confirmation-message'>You searched for: <strong>" . $search_query . "</strong></p>";

            $files_to_search = [
                'product.php',
                'activities.php',
                'index.php', 
                'Aboutus.php',
                'enhancement.php',
                'enquiry.php',
                'joinus.php',
                'learnmore.php',
                'hot4.php',
                'basic1.php',
                'artisan2.php',
                'memberregistration.php',
                'login.php',
                'Coming_Soon.php',
                'non3.php',
                'Pass_Activities.php',
                
            ];

            $results_found = [];

            foreach ($files_to_search as $file) {
                if (file_exists($file)) {
                    $raw_content = file_get_contents($file);
                    
                    // remove code blocks for cleaner searching and snippet generation
                    $cleaned_content = $raw_content;
                    // Remove PHP tags 
                    $cleaned_content = preg_replace('/<\?php.*?(\?>|$)/s', '', $cleaned_content);
                    // Remove script tags 
                    $cleaned_content = preg_replace('/<script\b[^>]*>.*?<\/script>/is', '', $cleaned_content);
                    // Remove style tags
                    $cleaned_content = preg_replace('/<style\b[^>]*>.*?<\/style>/is', '', $cleaned_content);
                    // Remove HTML comments
                    $cleaned_content = preg_replace('/<!--.*?-->/s', '', $cleaned_content);
                    // Strip remaining HTML tags to get mostly plain text
                    $text_content = strip_tags($cleaned_content);
                    // Normalize whitespace
                    $text_content = preg_replace('/\s+/', ' ', $text_content);

                    // Perform a case-insensitive search on the cleaned text content
                    if (stripos($text_content, $search_query) !== false) {
                        $snippet = '';
                        $pos = stripos($text_content, $search_query);
                        
                        // Generate snippet from the cleaned text_content
                        $start = max(0, $pos - 80); // Adjust snippet window
                        $length = 160; // Adjust snippet length
                        $snippet_text = substr($text_content, $start, $length);
                        
                        // Escape the snippet before highlighting
                        $escaped_snippet_text = htmlspecialchars($snippet_text, ENT_QUOTES, 'UTF-8');
                        
                        // Highlight the search query in the escaped snippet
                        $snippet = preg_replace(
                            '/(' . preg_quote(htmlspecialchars($search_query, ENT_QUOTES, 'UTF-8'), '/') . ')/i',
                            '<mark>$1</mark>',
                            $escaped_snippet_text
                        );
                        
                        $results_found[] = [
                            'file' => $file,
                            'title' => ucfirst(str_replace('.php', '', $file)), // Simple title from filename
                            'snippet' => (strlen($snippet_text) < strlen($text_content) && $start > 0 ? '...' : '') . $snippet . (strlen($snippet_text) >= $length ? '...' : '')
                        ];
                    }
                }
            }

            if (!empty($results_found)) {
                echo "<h3 class='stan-details-section-title'>Matching Pages:</h3>";
                echo "<ul class='stan-details-list'>"; 
                foreach ($results_found as $result) {
                    echo "<li>";
                    echo "<strong><a href='" . htmlspecialchars($result['file']) . "'>" . htmlspecialchars($result['title']) . "</a></strong>";
                    echo "<p>" . $result['snippet'] . "</p>"; // Added line-height
                    echo "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No pages found matching your search term.</p>";
            }

        } else {
            echo "<p class='stan-confirmation-message'>Please enter a search term.</p>";
        }
        ?>
        
        <a href="index.php" class="stanenquiry-btn">Back to Home</a>

    </main>

 <footer><?php include 'footer.php'; ?></footer>
</body>
</html>