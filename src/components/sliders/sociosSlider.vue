<template>
    <VueSlickCarousel :arrows="true" :dots="true" v-bind="settings">
        <b-col cols-12 sm="12" md="5" lg="4" xl="4" v-for="socio in socios" :key="socio.id">
            <img :src="socio.foto" :alt="socio.nome">
            <h2>{{socio.nome}}</h2>
            <p>{{socio.descricao}}</p>
        </b-col>
    </VueSlickCarousel>
</template>
<script>
import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'

export default {
    name: 'SociosSlider',
    components: { VueSlickCarousel },
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
            dots: true,
        },
}
</script>
<style lang="scss" scoped>

</style>