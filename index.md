[//]: # This markdown document is wholly the intellectual property of Carlo Morelli. 
[//]: # If you want to use OGMATH resources in your classroom please email teachermorelli@gmail.com


[//]: # *----------MathJax JavaScript Plugin-----------*

<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

[//]: # *-----Include above scripts with all pages.----*

---
pagetitle: OGMATH
---

<a href="https://ogmath.com"><span>&#129497;&#127995;</span>OGMATH</a>

# Morelli Algebra 1 Notes

[Kuta](https://student.works.kutasoftware.com "Kuta Works Student Login") | [YouTube](https://www.youtube.com/c/AthenianStranger "Athenian Stranger YouTube Tutorial Videos")

## Exponent Rules

<details>
<summary>Power Rules</summary>
<p>

### Power of a Product

#### Single Term in Parentheses

###### Rule

$$\left(a^m\right)^n=a^{m \cdot n}$$

> When raising an exponent to another exponent, such as $\left(a^m\right)^n=a^{m \cdot n}$, you *multiply* the exponents.

###### Examples

1. Given: $\left(x^2\right)^5$ apply the `power of a product rule` to simplify the expression.

    <details><summary>Show/Hide Solution</summary>
    <p>
        \begin{align*}
            \left(x^2\right)^5 &=& \\ 
            &= \left(x^{2 \cdot 5}\right)  \textrm{ You multiply the exponents.}\\ 
            &= x^{10} \textrm{ } \blacksquare
        \end{align*}
    </p>
    </details>

#### Multiple Terms in Parentheses    

###### Rule

$$(ab)^c=\left(a^c \cdot b^c\right)$$

> If there are multiple items inside the parentheses like $(ab)^c$ then you must distribute the outer exponent to *each term* such that $(ab)^c = (a^c \cdot b^c)$.

###### Examples

1. Given: $\left(2x^{3}\right)^2$ apply the `power rule of a product rule` to simplify the expression.

    <details><summary>Show/Hide Solution</summary>
    <p>
        \begin{align*}
            \left(2x^3\right)^2 &=& \\ 
            &= \left(2^{1 \cdot 2}x^{3 \cdot 2}\right) \textrm{ Distribute multiply exponents.}\\ 
            &= 2^2x^6 \\
            &= 4x^6 \textrm{ } \blacksquare
        \end{align*}
    </p>
    </details>

### Power of a Quotient

###### General Rule

$$\left(\frac{a}{b} \right )^m = \frac{a^m}{b^m}$$

> If you have a fraction raised to an exponent distribute multiply the outside exponent to the exponents of the numerator and denominator bases.

#### Fraction Terms Have No Exponents

###### Rule

$$\left(\frac{a}{b} \right )^m = \frac{a^m}{b^m}$$

#### Fraction Terms Have Exponents

###### Rule

$$\left(\frac{a^m}{b^n} \right )^p = \frac{a^{m \cdot p}}{b^{m \cdot p}}$$

###### Examples

1. Given $\left(\frac{2x^2y^5}{3z^7}\right)^2$ simplify the expression using the `Product of a Quotient Rule`.

    <details><summary>Show/Hide Solution</summary>
    <p>
       \begin{align*}
            \left(\frac{2x^2y^5}{3z^7}\right)^2 &=& \\
            &= \frac{2^{1 \cdot 2}x^{2 \cdot 2}y^{5 \cdot 2}}{3^{1 \cdot 2}z^{7 \cdot 2}} \\
            &= \frac{2^2x^4y^{10}}{3^2z^{14}} \\
            &= \frac{4x^4y{10}}{9z^{14}} \blacksquare
        \end{align*}
    </p>
    </details>

</p>
</details>

<details>
<summary>Logarithmic Exponent Rule</summary>
<p>

###### Rule

\begin{equation}
  \textrm{If } a^m = a^n \textrm{ then  } m=n.
\end{equation}

Here is a more thorough explanation:

\begin{align*}
    a^m &= a^n \\
    \ln{\left(a^m \right)} &= \ln{\left(a^n\right)} \\
    \ln{(a)} \cdot m &= \ln{(a)} \cdot n \\
    \frac{\ln{(a)}}{\ln{(a)}} \cdot m &= \frac{\ln{(a)}}{\ln{(a)}} \cdot n \\
    \therefore m &= n
\end{align*}

> If the bases are the same on both sides of the equals sign then the exponents are equal to each other.

###### Examples

1. For what value(s) of $x$ is the equation $4^{2x+7}=4^{19}$ `true`?

    <details><summary>Show/Hide Solution</summary>
    <p>
    
    \begin{align*}
        4^{2x+7} &= 4^{19} && \textrm{ Given} \\
        \ln(4^{2x+7}) &= \ln(4^{19}) && \textrm{ Take the Natural Logarithm of both sides.} \\
        (2x+7) \cdot \ln(4) &= (19) \cdot \ln(4) && \textrm{ The exponents are now brought down in front.} \\
        (2x+7) \cdot \frac{\ln(4)}{\ln(4)} &= (19) \cdot \frac{\ln(4)}{\ln(4)} && \textrm{ Divide both sides by }\ln(4)\textrm{.} \\
        2x + 7 &= 19 && \textrm{ Simplify and get ready to solve this simple equation.} \\
        2x + 7 - 7 &= 19 - 7 && \textrm{ Subtraction property of equality.} \\
        2x &= 12 && \textrm{ Simplify.} \\
        \frac{2x}{2} &= \frac{12}{2} && \textrm{ Divide both sides by the }x\textrm{ coefficient of }2\textrm{.} \\
        x &= 6 && \textrm{ Simplify.} \\
        \therefore 4^{2x+7} &= 4^{19} \textrm{ is true when } x \textrm{ = } 6\textrm{.}\blacksquare &&
\end{align*}
    

    </p>
    </details>

<details>
<summary>Latex</summary>
<p>

```mathjax
\begin{align*}
    a^m &= a^n \\
    \ln{\left(a^m \right)} &= \ln{\left(a^n\right)} \\
    \ln{(a)} \cdot m &= \ln{(a)} \cdot n \\
    \frac{\ln{(a)}}{\ln{(a)}} \cdot m &= \frac{\ln{(a)}}{\ln{(a)}} \cdot n \\
    \therefore m &= n
\end{align*}
```
</p>
</details>

</p>
</details>

## Factoring

<details>
<summary>GCF Factoring</summary>
<p>

###### Rule

You can rewrite $(a \cdot b + a \cdot c)$ as $a \cdot (b + c)$ by dividing both terms of the expression by the `greatest common factor` in the following manner: 

\begin{align*}
    (a \cdot b + a \cdot c) &=& \\ 
    &= a\left(\frac{a \cdot b}{a} + \frac{a \cdot c}{a}\right) \\ 
    &= a(b + c)
\end{align*}

> Divide all terms of the expression by the `GCF` or `greatest common factor` and set the `GCF` out to the left of the parentheses.

###### Examples

1. Given: $(4a + 4b)$ factor the expression using the `GCF`.

    <details><summary>Show/Hide Solution</summary>
    <p>
        \begin{align*}
            (4a + 4b) &=& \\ 
            &= 4\left(\frac{4a}{4} + \frac{4b}{4}\right) \\ 
            &= 4(a + b)
        \end{align*}
    </p>
    </details>

2. Given: $(21x^4 + 33x^5)$ factor the expression using the `GCF`.

    <details><summary>Show/Hide Solution</summary>
    <p>
        \begin{align*}
            (21x^4 + 33x^5) &=& \\
            &= 3x^4\left(\frac{21x^4}{3x^4} + \frac{33x^5}{3x^4}\right) \\
            &= 3x^4\left(\frac{21}{3}x^{4-4} + \frac{33}{3}x^{5-4}\right) \\
            &= 3x^4(7x^0 + 11x^1) \textrm{   Recall }x^0=1\textrm{ and  }x^1=x \therefore \\
            &= 3x^4(7 + 11x)
        \end{align*}
    </p>
    </details>

3. Given: $(5x + 15x^2)$ factor the expression using the `GCF`.

    <details><summary>Show/Hide Solution</summary>
    <p>
        \begin{align*}
            (5x + 15x^2) &=& \\
            &= \left(\frac{5x}{5x} + \frac{15x^2}{5x}\right) \\
            &= 5x\left(5^{1-1}x^{1-1} + \frac{15}{5}x^{2-1}\right) \\
            &= 5x\left(5^0x^0 + 3x^1\right) \textrm{   Recall } x^0=1 \textrm{ and  }x^1=x \therefore \\
            &= 5x\left(1 + 3x\right)
        \end{align*}
    </p>
    </details>

<details>
<summary>Markdown & Latex</summary>
<p>

```mathjax
## Factoring

<details>
<summary>GCF Factoring</summary>
<p>

###### Rule

You can rewrite $(a \cdot b + a \cdot c)$ as $a \cdot (b + c)$ by dividing both terms of the expression by the `greatest common factor` in the following manner: 

    \begin{align*}
        (a \cdot b + a \cdot c) &=& \textrm{ Given expression } \\ 
        &= \left(\frac{a \cdot b}{a} + \frac{a \cdot c}{a}\right) \textrm{Both terms divided by GCF of a} \\ 
        &= 4(a + b) \textrm{Expression is fully factored.}
    \end{align*}

> Divide all terms of the expression by the `GCF` or `greatest common factor` and set the `GCF` out to the left of the parentheses.

###### Examples

1. Given: $(4a + 4b)$ factor the expression using the `GCF`.

    <details><summary>Show/Hide Solution</summary>
    <p>
        \begin{align*}
            (4a + 4b) &=& \\ &= (\frac{4a}{4} + \frac{4b}{4}) \\ &= 4(a + b)
        \end{align*}
    </p>
    </details>
```
</p>
</details>

</p>
</details>



## Contact Me

Email me: <a href="mailto:teachermorelli@gmail.com">teachermorelli@gmail.com</a>

Call or Text me: (903) 480-0086 (parents and/or guardians only)

## Dedication

`This page is dedicated to my students.`

<center><a href="https://ogmath.com"><span>&#129497;&#127995;</span>OGMATH</a><center>
