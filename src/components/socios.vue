<template>
    <section id="socios">
        <div class="container">
            <h1>SOCIOS</h1>
        </div>
        <div class="arrowreference">
            <VueSlickCarousel  v-bind="settings" class="row" ref="carousel">
                <div v-for="socio in socios" :key="socio.id" class="item">
                    <img :src="socio.foto" :alt="socio.nome">
                    <div class="conteudo">
                        <h2>{{socio.nome}}</h2>
                        <p>{{socio.descricao}}</p>
                    </div>
                </div>
            </VueSlickCarousel>
            <div class="arrows">
                <a href="javascript:void(0);" class="prev" @click="showPrev">
                    <arrowslideleft/>
                </a>
                <a href="javascript:void(0);" class="prox" @click="showNext">
                    <arrowslideright/>
                </a>
            </div>
        </div>
    </section>
</template>
<script>

import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'

import arrowslideleft from './icones/arrowslideleft'
import arrowslideright from './icones/arrowslideright'


// para instalar : vue-slick-carousel

export default {
    name: 'Socios',
    components: { VueSlickCarousel,arrowslideleft,arrowslideright },
    data() {
        return {

            socios: [
                {
                    id:1,
                    nome:'RICARDO COSTA',
                    descricao:`Sócio-diretor da Idealiza Urbanismo e 
                    Idealiza Verticais, empresas que desenvolveram os 
                    condomínios de alto padrão de Pelotas, Lagos de 
                    São Gonçalo e Veredas Altos do Laranjal, e o bairro 
                    planejado Parque Una. Ricardo também.`,
                    foto:'../../images/socios/Ricardo.png'
                },
                {
                    id:2,
                    nome:'CARLOS EDUARDO SILVEIRA',
                    descricao:`Sócio diretor das empresas Urbasul, 
                    Prourb e Alpha Rio Grande Empreendimentos Imobiliários. 
                    Sócio da Australis Administração de Imóveis, 
                    especializada na gestão de propriedade imobiliária 
                    e desenvolvimento de Centros Comerciais.`,
                    foto:'../../images/socios/Carlos.png'
                },
                {
                    id:3,
                    nome:'DANIEL PERES MOREIRA',
                    descricao:`É administrador da AMMO Participações Societárias 
                    e da Curi Administração de Bens. É a sócio da Incomum Comunicação 
                    Estratégica, que atua em diversos mercados e segmentos, incluindo 
                    o imobiliário, desde 1995.`,
                    foto:'../../images/socios/Daniel.png'
                },
                {
                    id:4,
                    nome:'DANIEL PERES MOREIRA',
                    descricao:`É administrador da AMMO Participações Societárias 
                    e da Curi Administração de Bens. É a sócio da Incomum Comunicação 
                    Estratégica, que atua em diversos mercados e segmentos, incluindo 
                    o imobiliário, desde 1995.`,
                    foto:'../../images/socios/Daniel.png'
                }  
            ],
            settings: {
                arrows: true,
                dots: false,
                autoplay:true,
                autoplaySpeed:10000,
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                // prevArrow: document.querySelector('.prev'),
                // nextArrow: document.querySelector('.prox'), 
                pauseOnHover: true,
                responsive: [
                    {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        }
                    }
                ]    
            },
        }
    },
    methods: {
      showNext() {
        this.$refs.carousel.next()
      },
      showPrev() {
        this.$refs.carousel.prev()
      },
    },

}
</script>
<style scoped lang="scss">
    @import 'node_modules/bootstrap/scss/bootstrap';
    @import 'node_modules/bootstrap-vue/src/index.scss';
    @import "../../public/variables.scss";
    section{
        background-color: $bg-gray;
        padding-bottom: 300px;
        overflow: hidden;
        h1{
            font-family: 'Intro';
            font-size: 40px;
            color:$azul-escuro;
            position: relative;
            margin-bottom: 100px;
            &::before{
                display: block;
                content: '';
                position: absolute;
                bottom: -20px;
                left: 0;
                width:50px;
                height: 3px;
                background-color: $azul-escuro;
            }
        }
        .row{
            max-width: 1600px;
            margin: 0 auto;
            .item{
                padding: 0 30px;
                img{
                    width: 90%;
                }
                .conteudo{
                    background-color: $azul-claro;
                    padding: 30px;
                    height: 370px;
                    padding-top: 150px;
                    margin-top: -130px;
                    h2{
                        color:white;
                        font-size: 24px;
                    }
                    p{
                        color:white;
                        font-size: 20px;
                    }

                }
            } 
        }
        .arrowreference{
            position: relative;
             max-width: 1600px;
            margin: 0 auto;
            .arrows{
                position: absolute;
                bottom: -150px;
                right: 30px;
                .prev{
                    margin-right: 30px;
                    
                }
            }
        }
    }
    @media(max-width:1500px){
        section{
            padding-bottom: 220px;
            .row{
                max-width: 1200px;
                .item{

                    .conteudo{
                        height: 390px;
                        padding-top: 150px;
                        margin-top: -130px;
                        h2{
                            font-size: 22px;
                        }
                        p{
                            font-size: 16px;
                        }

                    }
                } 
            }
            .arrowreference{
                max-width: 1200px;
            }
        }
    }
    @media(max-width:1200px){
        section{
            .row{
                .item{
                    .conteudo{
                        height: 410px;
                    }
                }
            }
        }
    }
    @media(max-width:600px){
        section{
            h1{
                font-size: 36px;
            }
            padding-bottom: 100px;
            .arrowreference{
                .arrows{
                    top: -70px;
                }
            }
        }
    }
</style>