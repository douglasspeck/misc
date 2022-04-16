<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $title = 'MA141 – Geometria Analítica e Vetores';
        $description = 'Registros pessoais do curso de Licenciatura em Matemática na Unicamp';
        $keywords = '';
        $resources = [];
        include '../../assets/php/head.php';
    ?>
<body>
    <?php
        include '../assets/php/pages.php';
        include '../../assets/php/header.php';
    ?>
    <main>
        <header>
            <h1>
                <span class="tag">MA141</span>
                <span class="subject">Geometria Analítica e Vetores</span>
            </h1>
            <details class="header-details">
                <summary>Professor Pedro</summary>
                <div class="details-content">
                    <p></p>
                </div>
            </details>
        </header>
        <section>
            <h2>Aula introdutória</h2>
            <blockquote class="high-quote">prova impressa é foda</blockquote>
            <p>Já na Grécia antiga, o matemático Eratóstenes estimou pela primeira vez regisrada a circunferência da Terra, através de processos geométricos e tendo como dados a distância entre as cidades de Alexandria e Siena e o ângulo formado entre as duas em relação ao centro da Terra (estimado pela diferença de fusos horários).</p>
            <section>
                <h3>Formalismo matemático</h3>
                <p>Euclides foi o primeiro a trazer a noção de formalismo matemático através de axiomas.</p>
                <p><strong>círculo:</strong> \( \{x \mid d\left(0,x\right) = r^2 \} \)</p>
            </section>
        </section>
        <section>
            <h2>Matrizes</h2>
            <section>
                <h3>Determinantes</h3>
                <p><strong>def:</strong> Seja \( A=\left(a_{ij}\right)_{n\times n} \). O determinante de \(A\), denotado por \(detA\) é definido por: \( detA=\sum_{k=1}^n a_{1k}\cdot ã_{1k} \)</p>
                <p>onde \( ã_{ij} = \left(-1\right)^{i+j}\cdot detA_{ij} \) é o cofator de \( a_{ij} \) e \( a_{ij} \) é o menor de \(a_{ij}\), isto é, a matriz \(\left(n-1\right)\times\left(n-1\right)\) obtida da matriz \(A\) pela eliminação da linha \(i\) e da coluna \(j\).</p>
                <section>
                    <h4>Caso especial: matriz triangular inferior</h4>
                    <p>Seja \(A\) uma matriz triangular inferior, isto é, uma matriz na forma:</p>
                    <p>$$ A = a_{n\times n} = \{ 0 \Leftrightarrow i \lt j \} $$</p>
                    <p>Provaremos que: $$ detA=\prod_{k=1}^{n} a_{kk} $$</p>
                    <section>
                        <h5>demonstração</h5>
                        <p>Provamos por indução em \(n\)</p>
                        <p>$$ n=1 \Leftrightarrow A=\left[a_{ij}\right] \Rightarrow detA=a_{11} $$</p>
                        <p>Seja: \(A=\begin{bmatrix}
                            a_{11} & 0 & \cdots & \cdots & 0 \\
                            a_{21} & a_{22} & 0 & \cdots & 0 \\
                            \vdots & & \vdots & & \vdots \\
                            a_{\left(n+1\right)1} & a_{\left(n+1\right)1} & \cdots & \cdots & a_{\left(n+1\right)\left(n+1\right)} \\ \\
                            \end{bmatrix} \)
                        </p>
                        <p>\( detA = \sum_{k=1}^{n+1} a_{kk}ã_{kk} = a_{11}ã_{11} + \sum_{k=2}^{n+1} a_{kk}ã_{kk} = a_{11}ã_{11} + \sum_{k=2}^{n+1} 0\cdot ã_{kk} = a_{11}ã_{11}\)</p>
                        <p>\( \Rightarrow detA=a_{11}\cdot detA_{11} = a_{11}\cdot a_{11}det\)</p>
                    </section>
                </section>
                <section>
                    <h4>Teorema</h4>
                    <p>Seja \(A\) uma matriz \(n\times n\) escrita em termos de suas linhas. Então:</p>
                    <ol>
                        <li>
                            <p>
                                \( A_i = \alpha X + \beta Y,~ X=\begin{bmatrix} x_1 & x_2 & \cdots & x_n \end{bmatrix},~ Y=\begin{bmatrix} y_1 & y_2 & \cdots & y_n \end{bmatrix} \)
                            </p>    
                            <p>
                                \( \Rightarrow det\begin{bmatrix} A_1 \\ \vdots \\ A_i \\ \vdots \\ A_n \\\\ \end{bmatrix} = \alpha\cdot det\begin{bmatrix} A_1 \\ \vdots \\ X_i \\ \vdots \\ A_n \\\\ \end{bmatrix} + \beta\cdot det\begin{bmatrix} A_1 \\ \vdots \\ Y_i \\ \vdots \\ A_n \\\\ \end{bmatrix}\)
                            </p>
                        </li>
                        <li>
                            <p>\(A_i=A_j, i \ne j \Rightarrow detA=0\)</p>
                        </li>
                        <li>
                            <p>\(det\left(I_n\right)=1\)</p>
                        </li>
                    </ol>
                    <p><strong>Demonstração:</strong></p>
                    <ol>
                        <li></li>
                        <li>
                            <p>\(A=\left[a_{ij}\right]_{2\times 2} \Rightarrow detA=det\begin{bmatrix} a_{11} & a_{12} \\ a_{11} & a_{12} \end{bmatrix} = a_{11}a_{12}-a_{11}a_{12} = 0 \)</p>
                            <p>\( A=\left[a_{ij}\right]_{n\times n},~n\ge 2 \Rightarrow A_i=A_j,~i\ne j \)</p>
                        </li>
                        <li>
                            Trivial
                        </li>
                    </ol>
                </section>
                <section>
                    <h4>Teorema</h4>
                    <p>Sejam \( A=\left[a_{ij}\right]_{n\times n},~B=\left[b_{ij}\right]_{n\times n} \)</p>
                    <ol>
                        <li>
                            <p>
                                Se B é obtida de A multiplicando uma linha por \(\alpha\in\mathbb{R}\) então:
                            </p>
                            <p>\( detB = det\left(E_{i}\left(\alpha\right)A\right) = \alpha\cdot detA \)</p>
                        </li>
                        <li>
                            <p>Se B é obtida de A por trocar duas linhas então:</p>
                            <p>\( detB = det\left(E_{ij}A\right) = -detA \)</p>
                        </li>
                        <li>
                            <p>Se B é obtida de A substituindo uma linha por ela mesma somada a um múltiplo escalar de outra linha, então:</p>
                            <p>\( detB = det\left(E_{ij}\left(\alpha\right)A\right) = detA \)</p>
                        </li>
                    </ol>
                </section>
                <section>
                    <h4>Teorema</h4>
                    <p>\( A=\left[a_{ij}\right]_{n\times n},~B=\left[b_{ij}\right]_{n\times n} \Rightarrow det\left(AB\right)detA\cdot detB\)</p>
                </section>
                <section>
                    <h4>Corolário</h4>
                    <p>\( detE_{i}\left(\alpha\right)=\alpha, ~ \alpha \ne 0 \)</p>
                    <p>\( detE_{ij}=-1 \)</p>
                    <p>\( detE_{ij}\left(\alpha\right)=1 \)</p>
                </section>
                <section>
                    <h4>Corolário</h4>
                    <p>\( detA \ne 0 \Leftrightarrow A \) é invertível</p>
                    <section>
                        <h5>Demonstração</h5>
                        <p>Se A é invertível, sabemos que existem matrizes elementares \(E_1,E_2,\dots,E_k\) tais que:</p>
                        <p>$$ A \cdot \prod_{r=1}^k E_r = I_n $$</p>
                        <p>Logo:</p>
                        <p>$$ detA \cdot \prod_{r=1}^k detE_r = detI_n = 1$$</p>
                        <p>\(\therefore detA \ne 0 \)</p>
                    </section>
                </section>
                <section>
                    <h4>Teorema</h4>
                    <p>\( A=\left(a_{ij}\right)_{n\times n}, ~ B=\left(b_{ij}\right)_{n\times n} \Rightarrow detAB = detA \cdot detB\)</p>
                    <section>
                        <h5>Demonstração</h5>
                        <ol>
                            <li>A é uma matriz elementar \( \Rightarrow A=E_r \Rightarrow det\left(AB\right) = det\left(E_r\right) \cdot detB = \{-detB,detB,\alpha\cdot detB\} \)</li>
                            <li>A é invertível \(\Rightarrow A = \prod_{r=1}^k E_r \Rightarrow det\left(AB\right)=det\left(B\cdot \prod_{r=1}^k E_r\right)=detB \cdot \prod_{r=1}^k detE_r=detA\cdot detB \)</li>
                        </ol>
                    </section>
                </section>
                <section>
                    <h4>Teorema</h4>
                    <p>\( A=\left(a_{ij}\right)_{n\times n} \Rightarrow detA=det\left(A^t\right) \)</p>
                    <section>
                        <h5>Demonstração</h5>
                        <p>Se A é uma matriz elementar</p>
                    </section>
                </section>
            </section>
        </section>
        </main>
    <?php include '../../assets/php/scripts.php' ?>
</body>
</html>