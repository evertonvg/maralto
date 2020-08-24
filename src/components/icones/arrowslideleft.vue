<template>
    <svg xmlns="http://www.w3.org/2000/svg" 
    xmlns:xlink="http://www.w3.org/1999/xlink" 
    aria-hidden="true" focusable="false" 
    style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" 
    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></g>
    </svg>
</template>
<script>
export default {
    
}
</script>
<style lang="scss" scoped>
    svg{
        fill:#4d84fa;
        stroke:#4d84fa;
         width: 50px;
        height: 50px;
        &:hover{
            fill:#1d325a;
            stroke:#1d325a;
            transition: 0.3s ease all;
        }
        g{
            fill:#4d84fa;
            stroke:#4d84fa;
            transition: 0.3s ease all;
            &:hover{
                fill:#1d325a;
                stroke:#1d325a;
            }
        }
    }
</style>