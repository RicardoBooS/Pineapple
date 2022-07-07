
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trabalhe Conosco</title>
        <?php
        include_once './head.php';
        ?>   
    </head>
    <body>
        <?php
        include_once './topo.php';
        include_once './menu.php';
        ?>       
        <form action="salvar.php" method="post">
            <div id="imgtrab">
                <img src="imagens/trabconosco.png" > 
            </div> 
            <fieldset>
                <div>
                    <p style=" color: #000000;">Dados Pessoais</p>
                </div>
                <div>
                    <p style="color: #000000; font-size: 14px;">
                        Preencha todo o Currículo e nos mande para nossa empresa o avaliar e ver se está apto para o trabalho
                    </p>
                </div>
                <div>
                    <label for="nome">Nome:</label> 
                    <input id="nome" type="text" placeholder=" Nome completo"/>
                    <label for="paises">Nacionalidade:</label> 
                    <select name="paises" id="paises">
                        <option value="Brasil" selected="selected">Brasil</option>
                        <option value="Afeganistão">Afeganistão</option>
                        <option value="África do Sul">África do Sul</option>
                        <option value="Albânia">Albânia</option>
                        <option value="Alemanha">Alemanha</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antilhas Holandesas">Antilhas Holandesas</option>
                        <option value="Antárctida">Antárctida</option>
                        <option value="Antígua e Barbuda">Antígua e Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Argélia">Argélia</option>
                        <option value="Armênia">Armênia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Arábia Saudita">Arábia Saudita</option>
                        <option value="Austrália">Austrália</option>
                        <option value="Áustria">Áustria</option>
                        <option value="Azerbaijão">Azerbaijão</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrein">Bahrein</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belize">Belize</option>
                        <option value="Benim">Benim</option>
                        <option value="Bermudas">Bermudas</option>
                        <option value="Bielorrússia">Bielorrússia</option>
                        <option value="Bolívia">Bolívia</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgária">Bulgária</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Butão">Butão</option>
                        <option value="Bélgica">Bélgica</option>
                        <option value="Bósnia e Herzegovina">Bósnia e Herzegovina</option>
                        <option value="Cabo Verde">Cabo Verde</option>
                        <option value="Camarões">Camarões</option>
                        <option value="Camboja">Camboja</option>
                        <option value="Canadá">Canadá</option>
                        <option value="Catar">Catar</option>
                        <option value="Cazaquistão">Cazaquistão</option>
                        <option value="Chade">Chade</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Chipre">Chipre</option>
                        <option value="Colômbia">Colômbia</option>
                        <option value="Comores">Comores</option>
                        <option value="Coreia do Norte">Coreia do Norte</option>
                        <option value="Coreia do Sul">Coreia do Sul</option>
                        <option value="Costa do Marfim">Costa do Marfim</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Croácia">Croácia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Dinamarca">Dinamarca</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Egito">Egito</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Emirados Árabes Unidos">Emirados Árabes Unidos</option>
                        <option value="Equador">Equador</option>
                        <option value="Eritreia">Eritreia</option>
                        <option value="Escócia">Escócia</option>
                        <option value="Eslováquia">Eslováquia</option>
                        <option value="Eslovênia">Eslovênia</option>
                        <option value="Espanha">Espanha</option>
                        <option value="Estados Federados da Micronésia">Estados Federados da Micronésia</option>
                        <option value="Estados Unidos">Estados Unidos</option>
                        <option value="Estônia">Estônia</option>
                        <option value="Etiópia">Etiópia</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Filipinas">Filipinas</option>
                        <option value="Finlândia">Finlândia</option>
                        <option value="França">França</option>
                        <option value="Gabão">Gabão</option>
                        <option value="Gana">Gana</option>
                        <option value="Geórgia">Geórgia</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Granada">Granada</option>
                        <option value="Gronelândia">Gronelândia</option>
                        <option value="Grécia">Grécia</option>
                        <option value="Guadalupe">Guadalupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guernesei">Guernesei</option>
                        <option value="Guiana">Guiana</option>
                        <option value="Guiana Francesa">Guiana Francesa</option>
                        <option value="Guiné">Guiné</option>
                        <option value="Guiné Equatorial">Guiné Equatorial</option>
                        <option value="Guiné-Bissau">Guiné-Bissau</option>
                        <option value="Gâmbia">Gâmbia</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungria">Hungria</option>
                        <option value="Ilha Bouvet">Ilha Bouvet</option>
                        <option value="Ilha de Man">Ilha de Man</option>
                        <option value="Ilha do Natal">Ilha do Natal</option>
                        <option value="Ilha Heard e Ilhas McDonald">Ilha Heard e Ilhas McDonald</option>
                        <option value="Ilha Norfolk">Ilha Norfolk</option>
                        <option value="Ilhas Cayman">Ilhas Cayman</option>
                        <option value="Ilhas Cocos (Keeling)">Ilhas Cocos (Keeling)</option>
                        <option value="Ilhas Cook">Ilhas Cook</option>
                        <option value="Ilhas Feroé">Ilhas Feroé</option>
                        <option value="Ilhas Geórgia do Sul e Sandwich do Sul">Ilhas Geórgia do Sul e Sandwich do Sul</option>
                        <option value="Ilhas Malvinas">Ilhas Malvinas</option>
                        <option value="Ilhas Marshall">Ilhas Marshall</option>
                        <option value="Ilhas Menores Distantes dos Estados Unidos">Ilhas Menores Distantes dos Estados Unidos</option>
                        <option value="Ilhas Salomão">Ilhas Salomão</option>
                        <option value="Ilhas Virgens Americanas">Ilhas Virgens Americanas</option>
                        <option value="Ilhas Virgens Britânicas">Ilhas Virgens Britânicas</option>
                        <option value="Ilhas Åland">Ilhas Åland</option>
                        <option value="Indonésia">Indonésia</option>
                        <option value="Inglaterra">Inglaterra</option>
                        <option value="Índia">Índia</option>
                        <option value="Iraque">Iraque</option>
                        <option value="Irlanda do Norte">Irlanda do Norte</option>
                        <option value="Irlanda">Irlanda</option>
                        <option value="Irã">Irã</option>
                        <option value="Islândia">Islândia</option>
                        <option value="Israel">Israel</option>
                        <option value="Itália">Itália</option>
                        <option value="Iêmen">Iêmen</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japão">Japão</option>
                        <option value="Jersey">Jersey</option>
                        <option value="Jordânia">Jordânia</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Laos">Laos</option>
                        <option value="Lesoto">Lesoto</option>
                        <option value="Letônia">Letônia</option>
                        <option value="Libéria">Libéria</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lituânia">Lituânia</option>
                        <option value="Luxemburgo">Luxemburgo</option>
                        <option value="Líbano">Líbano</option>
                        <option value="Líbia">Líbia</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedônia">Macedônia</option>
                        <option value="Madagáscar">Madagáscar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldivas">Maldivas</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Malásia">Malásia</option>
                        <option value="Marianas Setentrionais">Marianas Setentrionais</option>
                        <option value="Marrocos">Marrocos</option>
                        <option value="Martinica">Martinica</option>
                        <option value="Mauritânia">Mauritânia</option>
                        <option value="Maurícia">Maurícia</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Moldávia">Moldávia</option>
                        <option value="Mongólia">Mongólia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Moçambique">Moçambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="México">México</option>
                        <option value="Mônaco">Mônaco</option>
                        <option value="Namíbia">Namíbia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Nicarágua">Nicarágua</option>
                        <option value="Nigéria">Nigéria</option>
                        <option value="Niue">Niue</option>
                        <option value="Noruega">Noruega</option>
                        <option value="Nova Caledônia">Nova Caledônia</option>
                        <option value="Nova Zelândia">Nova Zelândia</option>
                        <option value="Níger">Níger</option>
                        <option value="Omã">Omã</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestina">Palestina</option>
                        <option value="Panamá">Panamá</option>
                        <option value="Papua-Nova Guiné">Papua-Nova Guiné</option>
                        <option value="Paquistão">Paquistão</option>
                        <option value="Paraguai">Paraguai</option>
                        <option value="País de Gales">País de Gales</option>
                        <option value="Países Baixos">Países Baixos</option>
                        <option value="Peru">Peru</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Polinésia Francesa">Polinésia Francesa</option>
                        <option value="Polônia">Polônia</option>
                        <option value="Porto Rico">Porto Rico</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Quirguistão">Quirguistão</option>
                        <option value="Quênia">Quênia</option>
                        <option value="Reino Unido">Reino Unido</option>
                        <option value="República Centro-Africana">República Centro-Africana</option>
                        <option value="República Checa">República Checa</option>
                        <option value="República Democrática do Congo">República Democrática do Congo</option>
                        <option value="República do Congo">República do Congo</option>
                        <option value="República Dominicana">República Dominicana</option>
                        <option value="Reunião">Reunião</option>
                        <option value="Romênia">Romênia</option>
                        <option value="Ruanda">Ruanda</option>
                        <option value="Rússia">Rússia</option>
                        <option value="Saara Ocidental">Saara Ocidental</option>
                        <option value="Saint Martin">Saint Martin</option>
                        <option value="Saint-Barthélemy">Saint-Barthélemy</option>
                        <option value="Saint-Pierre e Miquelon">Saint-Pierre e Miquelon</option>
                        <option value="Samoa Americana">Samoa Americana</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Santa Helena, Ascensão e Tristão da Cunha">Santa Helena, Ascensão e Tristão da Cunha</option>
                        <option value="Santa Lúcia">Santa Lúcia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serra Leoa">Serra Leoa</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Singapura">Singapura</option>
                        <option value="Somália">Somália</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Suazilândia">Suazilândia</option>
                        <option value="Sudão">Sudão</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Suécia">Suécia</option>
                        <option value="Suíça">Suíça</option>
                        <option value="Svalbard e Jan Mayen">Svalbard e Jan Mayen</option>
                        <option value="São Cristóvão e Nevis">São Cristóvão e Nevis</option>
                        <option value="São Marino">São Marino</option>
                        <option value="São Tomé e Príncipe">São Tomé e Príncipe</option>
                        <option value="São Vicente e Granadinas">São Vicente e Granadinas</option>
                        <option value="Sérvia">Sérvia</option>
                        <option value="Síria">Síria</option>
                        <option value="Tadjiquistão">Tadjiquistão</option>
                        <option value="Tailândia">Tailândia</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tanzânia">Tanzânia</option>
                        <option value="Terras Austrais e Antárticas Francesas">Terras Austrais e Antárticas Francesas</option>
                        <option value="Território Britânico do Oceano Índico">Território Britânico do Oceano Índico</option>
                        <option value="Timor-Leste">Timor-Leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Toquelau">Toquelau</option>
                        <option value="Trinidad e Tobago">Trinidad e Tobago</option>
                        <option value="Tunísia">Tunísia</option>
                        <option value="Turcas e Caicos">Turcas e Caicos</option>
                        <option value="Turquemenistão">Turquemenistão</option>
                        <option value="Turquia">Turquia</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Ucrânia">Ucrânia</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Uruguai">Uruguai</option>
                        <option value="Uzbequistão">Uzbequistão</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vaticano">Vaticano</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietname">Vietname</option>
                        <option value="Wallis e Futuna">Wallis e Futuna</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                        <option value="Zâmbia">Zâmbia</option>
                    </select>
                </div>
                <div>
                    <label for="email">E-mail:</label>
                    <input id="email" type="email" placeholder=" @"/>
                    <label for="num">Telefone:</label>
                    <input type="number" id="num" min="1" placeholder=" (__)____-____"/>
                </div>
                <div>
                    <label for="nasc">Data de Nascimento</label>
                    <input id="nasc" type="date"/>
                    <label for="estadocivil" style="margin-left: 30px;">Estado Civil:</label>
                    <select id="estadocivil">
                        <option value="solteiro">Solteiro(a)</option>
                        <option value="casado">Casado(a)</option>
                        <option value="viuvo">Viúvo(a)</option>
                        <option value="divorciado">Divorciado(a)</option>
                    </select>    
                </div>
                <div>
                    <label for="sexo">Sexo:</label>
                    <input id="fem" type="radio" name="sexo"/>
                    <label for="fem">Feminino</label>
                    <input id="mas" type="radio" name="sexo"/>
                    <label for="mas">Masculino</label>
                </div>
                <div>
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" placeholder=" Cidade Atual"/>
                    <label for="estado">Estado:</label>
                    <select id="estado">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
                <div>
                    <label for="bairro">Bairro:</label>
                    <input type="text" id="bairro"/>
                    <label for="cep">CEP:</label>
                    <input type="text" id="cep" maxlength="8" placeholder=" _____-___"/>
                </div>
            </fieldset>
            <fieldset>
                <div style=" color: #000000;">
                    <p>Objetivo</p>
                </div>
                <div>
                    <textarea id="obg" cols="45" rows="3"></textarea>
                </div>
            </fieldset>
            <fieldset>
                <div style=" color: #000000;">
                    <p>Experiência Profissional</p>
                </div>
                <div>
                    <label for="EMP">Empresa:</label>
                    <input id="EMP" type="text"/>
                </div>
                <div>
                    <label for="PER">Período:</label>
                    <input id="PER" type="text"/>
                </div>
                <div>
                    <label for="CRG">Cargo:</label> 
                    <input id="CRG" type="text"/>
                </div>
                <div>    
                    <label for="ATV">Principais Atividades:</label>
                    <input id="ATV" type="text"/>
                </div>
                <br>
                <div>
                    <label for="EMP">Empresa:</label>
                    <input id="EMP" type="text"/>
                </div>
                <div>
                    <label for="PER">Período:</label>
                    <input id="PER" type="text"/>
                </div>
                <div>
                    <label for="CRG">Cargo:</label> 
                    <input id="CRG" type="text"/>
                </div>
                <div>    
                    <label for="ATV">Principais Atividades:</label>
                    <input id="ATV" type="text"/>
                </div>
                <br>
                <div>
                    <label for="EMP">Empresa:</label>
                    <input id="EMP" type="text"/>
                </div>
                <div>
                    <label for="PER">Período:</label>
                    <input id="PER" type="text"/>
                </div>
                <div>
                    <label for="CRG">Cargo:</label> 
                    <input id="CRG" type="text"/>
                </div>
                <div>    
                    <label for="ATV">Principais Atividades:</label>
                    <input id="ATV" type="text"/>
            </fieldset>
            <fieldset>
                <div style=" color: #000000; margin-left: 25px;">
                    <p>Formação</p>
                </div>
                <select id="formacao" style="margin-left: 39px;">
                    <option value="EFI">Ensino Fundamental Incompleto</option>
                    <option value="EFC">Ensino Fundamental Completo</option>
                    <option value="EMI">Ensino Médio Incompleto</option>
                    <option value="EMC">Ensino Médio Completo</option>
                    <option value="SUP">Superior</option>
                    <option value="POS">Pós-graduação</option>
                    <option value="MES">Mestrado</option>
                    <option value="DRD">Doutorado</option>
                    <option value="PDR">Pós-doutorado</option>
                </select>
                <div>
                    <textarea id="esp" cols="45" rows="5" placeholder="Instituição e Curso"></textarea>
                </div>
            </fieldset>
            <fieldset>
                <div style=" color: #000000;">
                    <p>Informações Adicionais</p>
                </div>

                <div>
                    <textarea id="msag" cols="45" rows="5" placeholder="Exemplo: Premiado com o título de aluno destaque de graduação."></textarea>
                </div>
                <fieldset>
                    <div id="TextMD">
                        A nossa empresa está crescendo muito, e com esse crescimento, queremos aumentar a nossa força contratando novos funcionários. Queremos dar uma grande oportunidade para pessoas sem experiência e para pessoas com experiência. Para isso precisamos de você. Obrigado pela compreenção e Boa Sorte, espero que passe nos nossos requisítos.
                    </div>
                </fieldset>
                <div>
                    <center>
                        <button style="background-color: #000000; color: #ffffff; height: 30px; width: 80px; font-size: 20px; margin: 0px auto; " type="submit" onclick="alert('Formulário Enviado')">Enviar</button>
                    </center>
                </div>
            </fieldset>
        </form>
        <?php
        include_once './rodape.php';
        ?>
    </body> 
</html>