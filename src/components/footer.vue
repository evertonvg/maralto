<template>
    <footer>
        <b-row>
            <b-col cols-12 sm="12" md="12" lg="3" xl="3">
                <a href="#header" alt="volta ao inicio do site">
                    <img src="../../public/images/marca/MarcaSmall.png" alt="Logo Maralto">
                </a>
            </b-col>
            <b-col cols-12 sm="12" md="6" lg="4" xl="4">
                <h4>ENDEREÇO</h4>
                <p>
                    Rua Um Loteamento Parque UNA Nº 290 <br>
                    Pelotas | RS
                </p>
            </b-col>
            <b-col cols-12 sm="12" md="5" lg="4" xl="4">
                <h4>TELEFONE</h4>
                <p>
                    53 3204-6804
                </p>
            </b-col>
            <b-col cols-12 sm="12" md="1" lg="1" xl="1" class="redes-sociais">
                <a href="https://www.facebook.com/maraltourbanismo" title="facebook da maralto" target="_blank">
                    <facebook/>
                </a>
                <a href="https://www.instagram.com/maraltourbanismo/" title="instagram da maralto" target="_blank">
                    <instagram/>
                </a>
            </b-col>
            <b-col cols-12 sm="12" md="12" lg="12" xl="12" class="text-center ">
                    <a href="https://human2be.com.br/" title="site da human2be" target="_blank">
                        <human2be/>
                    </a>
            </b-col>
        </b-row>
    </footer>
</template>    
<script>
import facebook from './icones/facebook'
import instagram from './icones/instagram'
import human2be from './icones/human2be'
export default {
    components: {facebook,instagram,human2be},
}
</script>
<style scoped lang="scss">
    @import 'node_modules/bootstrap/scss/bootstrap';
    @import 'node_modules/bootstrap-vue/src/index.scss';
    @import "../../public/variables.scss";
    footer{
        position: relative;
        // z-index: -1;
        background-color:$azul-footer;
        width:100%;
        padding: 0 6%;
        padding-top:120px;
        padding-bottom: 50px;
        
        h4{
            color:white;
            font-family: 'Intro';
            font-size: 18px;
            margin-bottom: 40px;
            position: relative;
            &::before{
                display: block;
                content: '';
                position: absolute;
                bottom: -20px;
                left: 0;
                width:50px;
                height: 1px;
                background-color: white;
            }        
        }
        p{
            color:white;
            font-family: 'averta';
            font-size: 14px;
        }
        .redes-sociais{
            display: flex;
            align-items: center;
            justify-content: flex-end;
            flex-direction: row;
            a{
                margin-left: 26px;
            }
        }
        img{
            max-width: 90%;
            display: block;
            margin: 0 auto;
        }
    }
    @media(max-width:900px){
        footer{
            .row{
                div{
                    margin-bottom:30px;
                }
            }
        }
    }
    @media(max-width:600px){
        footer{
            .row{
                div{
                    margin-bottom:20px;
                }
            }
        }
    }
</style>