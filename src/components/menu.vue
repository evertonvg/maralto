<template>
    <nav >
        <ul>
            <li>
                <a href="#description" title="sobre" v-on:click="openclosemenu">SOBRE</a>
            </li>
            <!-- <li>
                <a href="#projetos" title="projetos" v-on:click="openclosemenu">PROJETOS</a>
            </li> -->
             <li>
                <a href="#socios" title="socios" v-on:click="openclosemenu">SOCIOS</a>
            </li>
            <li>
                <a href="#contato" title="fale conosco" v-on:click="openclosemenu">FALE CONOSCO</a>
            </li>
        </ul>
        <div class="content">

            <div for="check" class="checkin" v-on:click="openclosemenu">
                <input type="checkbox" id="check">
                <span class="hamburguer"></span>
            </div>
            <!-- <div class="quad"></div> -->
    
        </div>
        <div class="shadow"></div>
    </nav>
</template>
<script>
import mixinss from '../mixins/mixins.js'
export default {
    mixins:[mixinss],
    data() {
        return {
            element: ''
        }
    },
    methods:{

        scroll:()=>{
            let menu = document.querySelector('nav')
            
           
            if (window.pageYOffset > 100) {
                menu.classList.add('scroll')
                
 
            } else {
                menu.classList.remove('scroll')
                
            }
        },
        openclosemenu:()=>{
            let ul = document.querySelector('ul')
            let lis = document.querySelectorAll('ul > li')
            let check = document.querySelector('#check')
            let shadow = document.querySelector('.shadow')
            let span = document.querySelector('nav > .content > div > span')
            
            if(window.innerWidth<=600){
                if(check.checked==false){
                    check.checked=true
                    ul.classList.add('active')
                    shadow.classList.add('active')
                    document.body.style.overflowY = 'hidden'
                    // menu.classList.add('scroll')
                    setTimeout(function(){
                        lis.forEach(element => {
                            mixinss.methods.fadeIn(element, 0.3, 'block')
                        }); 
                    },800)
                    span.style.color = 'white'

                }else{
                    check.checked=false

                    lis.forEach(element => {
                            mixinss.methods.fadeOut(element, 0.1, 'none')
                    }) 
                    setTimeout(function(){
                        ul.classList.remove('active')
                        shadow.classList.remove('active')
                        // this.scroll
                    },200)
                
                    document.body.style.overflowY = 'auto'
                    span.style.color = '#4d84fa'
                }
            }
        }
    },
    mounted() {
        this.scroll();
    },
    created:  function() {
        window.addEventListener('scroll', this.scroll);
    },
}
</script>
<style scoped lang="scss">
    @import "../../public/variables.scss";
    nav {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        transition:0.3s ease all;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-end;
        z-index: 50000;
        box-shadow: 0 6px 7.84px 0.16px rgba(33, 33, 33, 0.1);;
        ul{
            padding:0 6%;
            width: 100%;
            height: 85px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-end;
            li{
                list-style: none;
                margin-left: 100px;
                a{
                    color:white;
                    text-decoration: none;
                    transition:0.3s ease all;  
                    font-size: 14px;
                    &:hover{
                        color:$azul-claro;
                        text-decoration: none;
                    }
                }
                &:last-child{
                    a{
                        background-color:$azul-claro;
                        padding:14px 30px;
                        border-radius: 2px;
                        transition:0.3s ease all;
                        &:hover{
                            background-color:$azul-escuro;
                            color:white;
                        }
                    };
                }
            }

        }
        .content{
            display:none;
            height: 50px;
            width: 30px;
            position: fixed;
            top: 35px;
            right: 20px;
            z-index: 10;
            cursor: pointer;
            div{
                width: 100%;
                height: 100%;
                position: relative;
                input[type=checkbox] {
                    display: none;
                    &:checked ~ span{
                        transform: rotate(45deg);
                    }
                    &:checked ~ span:before{
                        transform: rotate(90deg);
                        top: 0;
                    }
                    &:checked ~ span:after{
                        transform: rotate(90deg);
                        bottom: 0;
                    }
                }
                span{
                    width: 30px;
                    height: 4px;
                    color: $azul-claro;
                    background-color: currentColor;
                    position: absolute;
                    top: 0;
                    left: 0;
                    transition: all 0.3s ease-in-out;
                    &:before{
                        display: block;
                        content: "";
                        position: absolute;
                        top: -10px;
                        left: 0;
                        width: 30px;
                        height: 4px;
                        background-color: currentColor;
                        transition: all 0.3s ease-in-out;
                    }
                    &:after{
                        display: block;
                        content: "";
                        position: absolute;
                        bottom: -10px;
                        left: 0;
                        width: 30px;
                        height: 4px;
                        background-color: currentColor;
                        transition: all 0.3s ease-in-out;
                    }
                }
            }
        }
        .shadow{
            position: fixed;
            z-index: 3;
            bottom: 0;
            left: 0;
            width:0%;
            height: 0;
            background-color: rgba(77,132,250,0.4);
            transition: 0.3s ease all;
        }
        .shadow.active{
            width: 100%;
            height: 100%;
        }
    }
    .scroll{
        background-color:white;
        padding-bottom: 5px;
        ul{
            li{
                a{
                    color:$azul-claro;
                }
                &:last-child{
                    a{
                        color:white;
                        transition:0.3s ease all;
                    };
                }
            }
        }
    }
    @media(max-width:667px){
        nav{
            height: 75px;
            ul{
                position: fixed;
                z-index: 4;
                top: 0;
                right: 0;
                width: 0;
                height: 0;
                border-bottom-left-radius: 100%;
                transition: 0.7s ease all;
                overflow: hidden;
                background-color:#0D9B5B;
            }
            .active{
                height: 100vh;
                width:100%;
                // border-bottom-left-radius: 0;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                li{
                    margin-left: 0;
                    margin-bottom: 50px;
                    display: none;
                    a{
                        color:white;
                    }
                }
            }
            .content{
                display:block;
            }
        }
    }
</style>