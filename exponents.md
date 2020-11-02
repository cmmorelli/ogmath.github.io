---
pagetitle:Exponents
---

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
