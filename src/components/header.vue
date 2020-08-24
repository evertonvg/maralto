<template>
    <header id="header">
        <img src="../../public/images/marca/Marca.png" alt="">
        <a href="#description">
            <arrowdown/>
        </a>
    </header>
</template>    
<script>
import arrowdown from './icones/arrowdown'
export default { 
    components: {arrowdown}
}
</script>
<style scoped lang="scss">
    header{
        width:100%;
        height: 100vh;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-image:url('../../public/images/background/header.png');
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        position: relative;
        // z-index: -1;
        img{
            max-width: 90%;
            margin-bottom:250px;
        }
        a{
            position: absolute;
            bottom: 70px;
            // z-index: -1;
        }
    }
    @media(max-width:900px){
        header{
            img{
                margin-bottom:150px;
            }
        }
    }
    
</style>