<template>
    <p class="alert alert-primary warning-p">
        
    </p>
</template>
<script>
import mixinss from '../../mixins/mixins.js';
export default {
    mixins:[mixinss]
    
}
</script>

<style lang="scss" scoped>
    @import 'node_modules/bootstrap/scss/bootstrap';
    @import 'node_modules/bootstrap-vue/src/index.scss';
    @import "../../../public/variables.scss";

    .alert{
        display: none;
        position: fixed;
        width: 230px;
        bottom: 50px;
        right: 50px;  
        z-index: 50;
    }
</style>