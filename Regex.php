<?php 

//Regular Expressions
$input = "We are Doing a Nice Job.";

$pattern = "/^[ar|ce|ob]$/i";

echo preg_match($pattern, $input);

/**
 * MODIFIERS
 * i => case-sensitive
 * m => search
 * u => unicode
 * 
 * PATTERNS
 * [abc]
 * [^abc]
 * [0-9]
 * 
 * METACHARACTER
 * | 
 * .
 * ^
 */