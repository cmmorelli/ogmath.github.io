<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
  <meta charset="utf-8" />
  <meta name="generator" content="pandoc" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
  <title>OGMATH</title>
  <style type="text/css">
      code{white-space: pre-wrap;}
      span.smallcaps{font-variant: small-caps;}
      span.underline{text-decoration: underline;}
      div.column{display: inline-block; vertical-align: top; width: 50%;}
  </style>
  <link rel="stylesheet" href="pandoc1.css" />
  <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js" type="text/javascript"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js?"></script>
</head>
<body>
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<p><a href="https://ogmath.com"><span>🧙🏻</span>OGMATH</a></p>
<h1 id="morelli-algebra-1-notes">Morelli Algebra 1 Notes</h1>
<p><a href="https://student.works.kutasoftware.com" title="Kuta Works Student Login">Kuta</a> | <a href="https://www.youtube.com/c/AthenianStranger" title="Athenian Stranger YouTube Tutorial Videos">YouTube</a></p>
<?php include ('functions.html'); ?>
<?php include ('index2.php'); ?>
<details>
<summary>Latex</summary>
<p>
<pre class="mathjax"><code>\begin{align*}
    a^m &amp;= a^n \\
    \ln{\left(a^m \right)} &amp;= \ln{\left(a^n\right)} \\
    \ln{(a)} \cdot m &amp;= \ln{(a)} \cdot n \\
    \frac{\ln{(a)}}{\ln{(a)}} \cdot m &amp;= \frac{\ln{(a)}}{\ln{(a)}} \cdot n \\
    \therefore m &amp;= n
\end{align*}</code></pre>
</p>
</details>
</p>
</details>
<h2 id="factoring">Factoring</h2>
<details>
<summary>GCF Factoring</summary>
<p>
<h6 id="rule">Rule</h6>
<p>You can rewrite <span class="math inline">\((a \cdot b + a \cdot c)\)</span> as <span class="math inline">\(a \cdot (b + c)\)</span> by dividing both terms of the expression by the <code>greatest common factor</code> in the following manner:</p>
<p><span class="math display">\[\begin{align*}
    (a \cdot b + a \cdot c) &amp;=&amp; \\ 
    &amp;= a\left(\frac{a \cdot b}{a} + \frac{a \cdot c}{a}\right) \\ 
    &amp;= a(b + c)
\end{align*}\]</span></p>
<blockquote>
<p>Divide all terms of the expression by the <code>GCF</code> or <code>greatest common factor</code> and set the <code>GCF</code> out to the left of the parentheses.</p>
</blockquote>
<h6 id="examples">Examples</h6>
<ol type="1">
<li><p>Given: <span class="math inline">\((4a + 4b)\)</span> factor the expression using the <code>GCF</code>.</p>
<details>
<summary>Show/Hide Solution</summary>
<p>
<span class="math display">\[\begin{align*}
         (4a + 4b) &amp;=&amp; \\ 
         &amp;= 4\left(\frac{4a}{4} + \frac{4b}{4}\right) \\ 
         &amp;= 4(a + b)
     \end{align*}\]</span>
</p>
</details></li>
<li><p>Given: <span class="math inline">\((21x^4 + 33x^5)\)</span> factor the expression using the <code>GCF</code>.</p>
<details>
<summary>Show/Hide Solution</summary>
<p>
<span class="math display">\[\begin{align*}
         (21x^4 + 33x^5) &amp;=&amp; \\
         &amp;= 3x^4\left(\frac{21x^4}{3x^4} + \frac{33x^5}{3x^4}\right) \\
         &amp;= 3x^4\left(\frac{21}{3}x^{4-4} + \frac{33}{3}x^{5-4}\right) \\
         &amp;= 3x^4(7x^0 + 11x^1) \textrm{   Recall }x^0=1\textrm{ and  }x^1=x \therefore \\
         &amp;= 3x^4(7 + 11x)
     \end{align*}\]</span>
</p>
</details></li>
<li><p>Given: <span class="math inline">\((5x + 15x^2)\)</span> factor the expression using the <code>GCF</code>.</p>
<details>
<summary>Show/Hide Solution</summary>
<p>
<span class="math display">\[\begin{align*}
         (5x + 15x^2) &amp;=&amp; \\
         &amp;= \left(\frac{5x}{5x} + \frac{15x^2}{5x}\right) \\
         &amp;= 5x\left(5^{1-1}x^{1-1} + \frac{15}{5}x^{2-1}\right) \\
         &amp;= 5x\left(5^0x^0 + 3x^1\right) \textrm{   Recall } x^0=1 \textrm{ and  }x^1=x \therefore \\
         &amp;= 5x\left(1 + 3x\right)
     \end{align*}\]</span>
</p>
</details></li>
</ol>
<details>
<summary>Markdown &amp; Latex</summary>
<p>
<pre class="mathjax"><code>## Factoring

&lt;details&gt;
&lt;summary&gt;GCF Factoring&lt;/summary&gt;
&lt;p&gt;

###### Rule

You can rewrite $(a \cdot b + a \cdot c)$ as $a \cdot (b + c)$ by dividing both terms of the expression by the `greatest common factor` in the following manner: 

    \begin{align*}
        (a \cdot b + a \cdot c) &amp;=&amp; \textrm{ Given expression } \\ 
        &amp;= \left(\frac{a \cdot b}{a} + \frac{a \cdot c}{a}\right) \textrm{Both terms divided by GCF of a} \\ 
        &amp;= 4(a + b) \textrm{Expression is fully factored.}
    \end{align*}

&gt; Divide all terms of the expression by the `GCF` or `greatest common factor` and set the `GCF` out to the left of the parentheses.

###### Examples

1. Given: $(4a + 4b)$ factor the expression using the `GCF`.

    &lt;details&gt;&lt;summary&gt;Show/Hide Solution&lt;/summary&gt;
    &lt;p&gt;
        \begin{align*}
            (4a + 4b) &amp;=&amp; \\ &amp;= (\frac{4a}{4} + \frac{4b}{4}) \\ &amp;= 4(a + b)
        \end{align*}
    &lt;/p&gt;
    &lt;/details&gt;</code></pre>
</p>
</details>
</p>
</details>
<h2 id="contact-me">Contact Me</h2>
<p>Email me: <a href="mailto:teachermorelli@gmail.com">teachermorelli@gmail.com</a></p>
<p>Call or Text me: (903) 480-0086 (parents and/or guardians only)</p>
<h2 id="dedication">Dedication</h2>
<p><code>This page is dedicated to my students.</code></p>
<center>
<a href="https://ogmath.com"><span>🧙🏻</span>OGMATH</a>
<center>
</body>
</html>
