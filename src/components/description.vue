<template>
    <section id="description">
        <img src="../../public/images/grafismo/grafismo.png" alt="">
        <b-container>
            <b-row>
                <b-col cols-12  sm="12" md="12" lg="6" xl="6">
                    <h1>
                        MARALTO <br>
                        URBANISMO
                    </h1>
                </b-col>
                <b-col cols-12  sm="12" md="12" lg="6" xl="6">
                    <p>
                        A Maralto Urbanismo surgiu da junção de almas pulsantes. 
                        Que identificam oportunidades e desenvolvem projetos, com olhar no futuro e respeito ao passado. 
                        Estimulando as mais profundas transformações urbanas.
                        Acreditamos no poder da conexão dos projetos com as pessoas. Sabemos da importância do urbanismo sob medida, 
                        para a qualidade de vida daqueles que irão ocupar os espaços que projetamos.

                        
                    </p>
                    <p>
                        Nosso foco está no desafio de criar novas possibilidades para as cidades. Não poupamos esforços para ter 
                        a melhor equipe e o melhor resultado. Nos dedicamos aos detalhes,  pois são estes que mostram, o cuidado 
                        que temos com tudo o que realmente importa.

                    </p>
                </b-col>
            </b-row>
        </b-container>
    </section>
</template>
<script>
export default {
    
}
</script>
<style scoped lang="scss">
    @import 'node_modules/bootstrap/scss/bootstrap';
    @import 'node_modules/bootstrap-vue/src/index.scss';
    @import "../../public/variables.scss";
    section{
        margin:0 auto;
        padding:150px 0;
        position: relative;
        overflow: hidden;
        img{
            position: absolute;
            top: -50%;
            left: -1%;
            max-width: 50%;
        }
        h1{
            font-family: 'Intro';
            font-size: 40px;
            color:$azul-escuro;
            position: relative;
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
        p{
            color:$font-p;
            font-size:20px;
            font-family: 'averta';
        }
    }
    @media(max-width:1400px){
        section{
            p{
                font-size:16px;
            }
        }
    }
    @media(max-width:900px){
        section{
            h1{
                margin-bottom: 100px;
            }
        }
    }
    @media(max-width:600px){
        section{
            h1{
                font-size: 36px;
            }
        }
    }
</style>