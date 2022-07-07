<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <?php
        include_once 'head.php';
        ?>
    </head>
    <body>
        <?php
        include_once 'topo.php';
        include_once 'menu.php';
        ?><!--
        <div id="nomebasic">
            <img src="imagens/mb2.png">
        </div>
        <br>
        -->
        <div id="detalhesbasicgeral">
            <div id="nomepcbasic">
                <h3>COMPUTADOR BÁSICO MARK BASIC</h3>
            </div>
            <div id="detalhesbasic">
                <h3>DETALHES</h3>
            </div>
            <div id="imginfobasic">

                <div id="imagempcbasic">
                    <img src="imagens/mb2sempreco.png">
                    <img src="imagens/basmon.png" style="padding-top: 50px">
                </div>
                <div id="infobasic">
                    <div id="precobasicV">
                        <h3>R$ 1.883,96</h3>
                    </div>
                    <div id="pacelamentobasic">
                        <h5>Em até 12x no PagSeguro</h5>
                    </div>
                    <div id="tipocartoesbasic">
                        <img src="imagens/cartoes2.png">
                    </div>
                    <div id="encomendarbasic">
                        <a href="contato.php"> <button type="submit" ><img src="imagens/encomendar2.png"/></button></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="sliderbasicgeral">
            <div id="titulosliderbasic">
                <h3>PEÇAS</h3>
            </div>
            <div id="sliderbasic">
                <section class="pagedImages">
                    <input id="page1" accesskey="1" type="radio" name="pagedImages1" title="Images page 1" checked="checked" />
                    <input id="page2" accesskey="2" type="radio" name="pagedImages1" title="Images page 2" />
                    <input id="page3" accesskey="3" type="radio" name="pagedImages1" title="Images page 3" />
                    <label for="page1" title="Página 1">1</label>
                    <label for="page2" title="Página 2">2</label>
                    <label for="page3" title="Página 3">3</label>
                    <ul title=" ">
                        <li id="image1">
                            <a href="#image1"><img alt="" src="imagens/basic1.1.jpg" /></a>
                            <article>
                                <h3>Placa Mãe</h3>
                                <p>Placa Mãe da Asus modelo H110S2/CSM.</p>
                                <p>Preço Individual: R$ 260,00</p>
                                <p><a href="#">Fechar</a></p>
                            </article>
                        </li>
                        <li id="image2">
                            <a href="#image2"><img alt="" src="imagens/basic2.2.jpg" /></a>
                            <article>
                                <h3>Processador</h3>
                                <p>Processador da Intel modelo DX80662G3900.</p>
                                <p>Preço Individual: R$ 165,00.</p>
                                <p><a href="#">Fechar</a></p>
                            </article>
                            <aside>
                                <p>You can have more than one element here and it doesn't need to be article.</p>
                            </aside>
                        </li>
                        <li id="image3">
                            <a href="#image3"><img alt="" src="imagens/basic3.jpg" /></a>
                            <article>
                                <h3>Memória RAM </h3>
                                <p>Memória RAM da Kingston modelo HX421C14FB/4.</p>
                                <p>Capacidade: 4 GB.</p>
                                <p>Preço Individual: R$ 211,90</p>
                                <p><a href="#">Fechar</a></p>
                            </article>
                        </li>
                        <li id="image4">
                            <a href="#image4"><img alt="" src="imagens/basic4.jpg" /></a>
                            <article>
                                <h3>Hard Disk</h3>
                                <p>Hard Disk da WD modelo WD5000AZLX.</p>
                                <p>Capacidade: 500 GB.</p>
                                <p>Preço Individual: R$ 254,00.</p>
                                <p></p>
                                <p><a href="#">Fechar</a></p>
                            </article>
                        </li>
                    </ul>
                    <ul title=" ">
                        <li id="image5">
                            <a href="#image5"><img alt="" src="imagens/basic5.jpg" /></a>
                            <article>
                                <h3>Placa de Vídeo</h3>
                                <p>Placa de Vídeo da Gigabyte modelo GV-N420-2GI.</p>
                                <p>Preço Individual: R$ 217,55.</p>
                                <p><a href="#">Fechar</a></p>
                            </article>
                        </li>
                        <li id="image6">
                            <a href="#image6"><img alt="" src="imagens/basic6.jpg" /></a>
                            <article>
                                <h3>Fonte de Alimentação</h3>
                                <p>Fonte de Alimentação da ARGUS modelo PX500.</p>
                                <p>Potência Real: 500 W.</p>
                                <p>Preço Individual: R$ 146,94.</p>
                                <p><a href="#">Fechar</a></p>
                            </article>
                        </li>
                        <li id="image7">
                            <a href="#image7"><img alt="" src="imagens/basic7.jpg" /></a>
                            <article>
                                <h3>Gabinete</h3>
                                <p>Gabinete da ATOMIC modelo 107 CASE.</p>
                                <p>Preço Individual: R$ 222,87.</p>
                                <p><a href="#">Fechar</a></p>
                            </article>
                        </li>
                        <li id="image8">
                            <a href="#image8"><img alt="" src="imagens/basic8.jpg" /></a>
                            <article>
                                <h3>Mouse</h3>
                                <p>Mouse da Multilase modelo MO208.</p>
                                <p>Conexão: USB.</p>
                                <p>Preço Individual: R$ 45,9.0</p>
                                <p><a href="#">Fechar</a></p>
                            </article>
                        </li>
                    </ul>
                    <ul title="">
                        <li id="image9">
                            <a href="#image9"><img alt="" src="imagens/basic9.jpg" /></a>
                            <article>
                                <h3>Teclado</h3>
                                <p>Teclado da Bright modelo ABNT.</p>
                                <p>Conexão: PS2</p>
                                <p>Preço Individual: R$ 29,90</p>
                                <p><a href="#">Fechar</a></p>
                            </article>
                        </li>
                        <li id="image10">
                            <a href="#image10"><img alt="" src="imagens/basic10.jpg" /></a>
                            <article>
                                <h3>Monitor</h3>
                                <p>Monitor da PCTOP modelo MLP156HDMI.</p>
                                <p>Tamanho: 17 pol </p>
                                <p>Preço Individual: R$ 260,00</p>
                                <p><a href="#">Fechar</a></p>
                            </article>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
        <div id="maioresdetalhesgeral">
            <div id="titulomaioresdetalhes">
                <h3>MAIORES DETALHES</h3>
            </div>
            <div id="maisdetalhes">
                <h2>Características</h2>
                <ul>
                    <li>Marca: Mark Basic</li>
                    <li>Tipo de Computador: Pessoal</li>
                </ul>
                <br>
                <h2>Descrição:</h2>
                <p>Optamos por um processador INTEL CELERON, uma memória RAM de apenas 4GB, HD de 500GB, placa de vídeo de boa qualidade, pois são peças de fáceis  consumo e tanto quanto boa para uso pessoal.</p>
                <br>
                <h2>Peças:</h2>
                <ul>
                    <li>Placa Mãe: ASUS H110S2/CSM</li>
                    <li>Processador: INTEL DX80662G3900</li>
                    <li>Memória RAM: Kingston HX421C14FB/4</li>
                    <li>Armazenamento: Hard Disk WD WD5000AZLX </li>
                    <li>Placa de Vídeo: Gigabyte GV-N420-2GI</li>
                    <li>Fonte de Alimentação: Argus PX500 </li>
                    <li>Gabinete: Atomic 107 CASE</li>
                    <li>Mouse: MultiLaser MO208</li>
                    <li>Teclado: BRIGHT ABNT</li>
                    <li>Monitor: PCTO PMLP156HDMI</li>
                </ul>
                <br>
                <h2>Garantia:</h2>
                <p>1 Ano de garantia com a Pineapple</p>
                <br>
                <h2>Frete:</h2>
                <p>Gratuito para todo o Brasil</p>
            </div>
        </div>
        <?php
        include_once 'rodape.php';
        ?>
    </body>
</html>
