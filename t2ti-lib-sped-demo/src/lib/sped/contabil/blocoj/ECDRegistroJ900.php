<?php
/*******************************************************************************
Title: T2Ti ERP Fenix                                                                
Description: Model relacionado ao SPED Contábil - ECD
                                                                                
The MIT License                                                                 
                                                                                
Copyright: Copyright (C) 2020 T2Ti.COM                                          
                                                                                
Permission is hereby granted, free of charge, to any person                     
obtaining a copy of this software and associated documentation                  
files (the "Software"), to deal in the Software without                         
restriction, including without limitation the rights to use,                    
copy, modify, merge, publish, distribute, sublicense, and/or sell               
copies of the Software, and to permit persons to whom the                       
Software is furnished to do so, subject to the following                        
conditions:                                                                     
                                                                                
The above copyright notice and this permission notice shall be                  
included in all copies or substantial portions of the Software.                 
                                                                                
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,                 
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES                 
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND                        
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT                     
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,                    
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING                    
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR                   
OTHER DEALINGS IN THE SOFTWARE.                                                 
                                                                                
       The author may be contacted at:                                          
           t2ti.com@gmail.com                                                   
                                                                                
@author Albert Eije (alberteije@gmail.com)                    
@version 1.0.0
*******************************************************************************/
declare(strict_types=1);

class ECDRegistroJ900
{

    private $numOrd; /// Número de ordem do instrumento de escrituração.
    private $natLivro; /// Natureza do livro
    private $nome; /// Nome empresarial.
    private $qtdLin; /// Quantidade total de linhas do arquivo digital.
    private $dtIniEscr; /// Data de inicio da escrituração.
    private $dtFinEscr; /// Data de término da escrituração.

    /**
     * @return the numOrd
     */
    public function getNumOrd() {
        return $this->numOrd;
    }

    /**
     * @param numOrd the numOrd to set
     */
    public function setNumOrd($numOrd) {
        $this->numOrd = $numOrd;
    }

    /**
     * @return the natLivro
     */
    public function getNatLivro() {
        return $this->natLivro;
    }

    /**
     * @param natLivro the natLivro to set
     */
    public function setNatLivro($natLivro) {
        $this->natLivro = $natLivro;
    }

    /**
     * @return the nome
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * @param nome the nome to set
     */
    public function setNome($nome) {
        $this->nome = $nome;
    }

    /**
     * @return the qtdLin
     */
    public function getQtdLin() {
        return $this->qtdLin;
    }

    /**
     * @param qtdLin the qtdLin to set
     */
    public function setQtdLin($qtdLin) {
        $this->qtdLin = $qtdLin;
    }

    /**
     * @return the dtIniEscr
     */
    public function getDtIniEscr() {
        return $this->dtIniEscr;
    }

    /**
     * @param dtIniEscr the dtIniEscr to set
     */
    public function setDtIniEscr($dtIniEscr) {
        $this->dtIniEscr = $dtIniEscr;
    }

    /**
     * @return the dtFinEscr
     */
    public function getDtFinEscr() {
        return $this->dtFinEscr;
    }

    /**
     * @param dtFinEscr the dtFinEscr to set
     */
    public function setDtFinEscr($dtFinEscr) {
        $this->dtFinEscr = $dtFinEscr;
    }

}
