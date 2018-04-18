/*
 * @author Ricardo Fernandes
 */

$(document).ready(function () {
    geraCategoria();
    });

function geraCategoria() {

    var cat = new Categoria('Localização');
    
    var aba1 = new Aba('Geral');
    var cImagem = new Campo("Imagem", "img", " ", true, true);
    aba1.addCampo(cImagem);
    
    cat.addAba(aba1);
    
    var aba2 = new Aba('Biologia');
    var cImagem = new Campo("Imagem", "img", " ", true, true);
    aba2.addCampo(cImagem);
    
    cat.addAba(aba2);
    
    var content = cat.print();
    
    //fazer download do arquivo para testes
    uriContent = "data:application/octet-stream," + encodeURIComponent(content);
    saveAs(uriContent, "Cadastrar"+cat.catName+".php");
}

function Categoria(nome) {
    this.nome = nome;
    this.abas = [];
}

Categoria.prototype.addAba = function(aba) {
    this.abas.push(aba);
};

Categoria.prototype.print = function() {
    var content = "";
    
    //cabeçalho
    content += [
        "<!--CORPO DE VERDADE-->",
        "<div class='page-content'>",
        "<div class='page-heading mb0'>",
            "<div class='marquee'><?=$this->getDicas()?></div>",
            "<h1>"+this.nome+"</h1>",
            "<div class='options'>",
                "<div class='btn-toolbar'>",
                    "<a href='#' class='btn btn-default'><i class='fa fa-fw fa-cog'></i></a>",
                "</div>",
            "</div>",
        "</div>\n"
    ].join("\n");
    
    //abas
    content += [
        "<div class='page-tabs'>",
            "<ul class='nav nav-tabs'>",
                "<li class='dropdown pull-right tabdrop hide'>",
                    "<a class='dropdown-toggle' data-toggle='dropdown' href='#'><i class='fa fa-angle-down'></i></a>",
                    "<ul class='dropdown-menu'></ul>",
                "</li>",
                "<!--ABAS-->",
                geraListaAbas(this.abas),
            "</ul>",
        "</div>\n"
    ].join("\n");
    
    for(var i=0, len = this.abas.length; i < len; i++) {
        content += this.abas[i].print();
    }
    
    //fechar divs faltantes
    content += "</div>\n"; //fecha page-content
    content += "<!-- CORPO DE VERDADE/ -->";
    
    return content;
};

function geraListaAbas(abas) {
    var content = "";
    
    for(var i=0, len = abas.length; i < len; i++) {
        if (i === 0)
            content += "<li class='active'>";
        else
            content += "<li>";
        content += "<a data-toggle='tab' href='#aba"+abas[i].nome+"'>"+abas[i].nome+"</a></li>";
        if (i !== len - 1)
            content += "\n";
    }
    
    return content;
}

/*Protótipo de Aba*/
function Aba(nome) {
    this.nome = nome;
    this.campos = [];
}

Aba.prototype.print = function() {
    var content = "";
    
    content += "This is aba "+this.nome+" com "+this.campos.toString()+'\n';
    
    return content;
};

Aba.prototype.addCampo = function(campo) {
    this.campos.push(campo);
};

/*Protótipo de Campo*/
function Campo(nome, tipo, placeholder, temDetalhe, temToggle) {
    this.nome = nome;
    this.tipo = tipo;
    this.placeholder = placeholder;
    this.temDetalhe = temDetalhe;
    this.temToggle = temToggle;
}

Campo.prototype.print = function() {
    var content = "";
    
    content += "<div class='form-group'>\n";
    
    switch(this.tipo) {
        case 'text':
            content += "";
            break;
    }
    
    content += "</div>\n"; //fecha inputWrapper
    
    if (this.temToggle) {
        content += [
            "<div class='col-sm-2'>",
                "<span class='button-icon has-bg inputToggle'><i class='fa fa-minus'></i></span>",
                "<span class='button-icon has-bg inputDelet'><i class='fa fa-times'></i></span>",
            "</div>"
        ].join("\n");
    }
    
    content += "</div>\n"; //fecha form-group
    
    return content;
};

/*Função para download do arquivo*/
function saveAs(uri, filename) {
  var link = document.createElement('a');
  if (typeof link.download === 'string') {
    link.href = uri;
    link.download = filename;

    //Firefox requires the link to be in the body
    document.body.appendChild(link);
    
    //simulate click
    link.click();

    //remove the link when done
    document.body.removeChild(link);
  } else {
    window.open(uri);
  }
}