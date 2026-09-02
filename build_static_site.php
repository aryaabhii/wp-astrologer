<?php
/**
 * Build Static Site Script for GitHub Pages Deployment
 * Converts WordPress pages & assets to static HTML/CSS/JS in dist/ directory
 */

$base_url = 'http://localhost/wordpress';
$repo_name = '/wp-astrologer'; // GitHub repository name base path

$urls_to_export = array(
	'/' => 'index.html',
	'/about-raghu-sharma/' => 'about-raghu-sharma/index.html',
	'/contact-us/' => 'contact-us/index.html',
	'/services/' => 'services/index.html',
	'/black-magic-removal-adelaide/' => 'black-magic-removal-adelaide/index.html',
	'/get-your-ex-love-back-adelaide/' => 'get-your-ex-love-back-adelaide/index.html',
	'/negative-energy-removal-adelaide/' => 'negative-energy-removal-adelaide/index.html',
	'/love-problem-solution-adelaide/' => 'love-problem-solution-adelaide/index.html',
	'/psychic-reading-adelaide/' => 'psychic-reading-adelaide/index.html',
	'/tarot-card-reading-adelaide/' => 'tarot-card-reading-adelaide/index.html',
	'/vashikaran-specialist-adelaide/' => 'vashikaran-specialist-adelaide/index.html',
	'/marriage-relationship-problems-adelaide/' => 'marriage-relationship-problems-adelaide/index.html',
	'/spiritual-healing-adelaide/' => 'spiritual-healing-adelaide/index.html',
	'/palm-reading-adelaide/' => 'palm-reading-adelaide/index.html',
	'/horoscope-astrology-reading-adelaide/' => 'horoscope-astrology-reading-adelaide/index.html',
	'/pooja-spiritual-services-adelaide/' => 'pooja-spiritual-services-adelaide/index.html'
);

$dist_dir = __DIR__ . '/dist';

// Remove old dist directory
if (file_exists($dist_dir)) {
	exec("rm -rf " . escapeshellarg($dist_dir));
}

mkdir($dist_dir, 0755, true);
file_put_contents($dist_dir . '/.nojekyll', ''); // Prevent GitHub Pages Jekyll processing

echo "Building static site in dist/...\n";

// Helper function to calculate relative path from output file to root
function get_relative_prefix($filepath) {
	$depth = substr_count(trim($filepath, '/'), '/');
	if ($depth === 0) return './';
	return str_repeat('../', $depth);
}

foreach ($urls_to_export as $path => $outfile) {
	$full_url = $base_url . $path;
	$html = @file_get_contents($full_url);
	
	if (!$html) {
		echo "ERROR fetching: $full_url\n";
		continue;
	}

	$rel_prefix = get_relative_prefix($outfile);

	// Replace localhost URLs with GitHub Pages compatible paths
	$html = str_replace($base_url . '/', $rel_prefix, $html);
	$html = str_replace($base_url, $rel_prefix, $html);
	
	// Ensure contact form submit action doesn't try to submit to #
	$html = str_replace('action="#"', 'action="javascript:void(0);"', $html);

	$target_file = $dist_dir . '/' . $outfile;
	$dir = dirname($target_file);
	if (!file_exists($dir)) {
		mkdir($dir, 0755, true);
	}

	file_put_contents($target_file, $html);
	echo "Exported: $path -> $outfile\n";
}

// Copy assets
echo "Copying theme assets to dist/...\n";
exec("cp -r " . escapeshellarg(__DIR__ . '/wp-content') . " " . escapeshellarg($dist_dir . '/'));

if (file_exists(__DIR__ . '/wp-includes')) {
	exec("cp -r " . escapeshellarg(__DIR__ . '/wp-includes') . " " . escapeshellarg($dist_dir . '/'));
}

echo "Static site build complete in dist/!\n";
