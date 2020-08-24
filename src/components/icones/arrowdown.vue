<template>
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
    aria-hidden="true" focusable="false" width="50px" height="50px" 
    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" 
    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 17l-4 4m0 0l-4-4m4 4V3"/></g>
    </svg>
</template>
<script>
export default {
    
}
</script>
<style scoped lang="scss">
    @import "../../../public/variables.scss";
    svg{
        fill:$azul-claro;
        stroke:$azul-claro;
        transition: 0.3s ease all;
        cursor: pointer;
        &:hover{
            fill:$azul-escuro;
            stroke:$azul-escuro;
        }
    }
</style>