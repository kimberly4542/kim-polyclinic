<template>
    <ul class="pagination pagination-sm">
        <li class="page-item"><a class="page-link" href="#" @click.prevent="paginate(prev_page_url)">«</a></li>
        <li class="page-item"><a class="page-link" href="#">{{current_page}}</a></li>
        <li class="page-item"><a class="page-link" href="#" @click.prevent="paginate(next_page_url)">»</a></li>
        	                  
    </ul>
</template>
<script>
export default {
    name:"Pagination",
    props:{
        next_page_url:{
            type:String,
            default:null
        },
        prev_page_url:{
            type:String,
            default:null
        },
        current_page_url:{
            type:String,
            default:null
        },
        current_page:{
            type:String,
            default:"1"
        }
    },
    data(){
        return {
            jumpTo:"",
        }
    },  
    methods:{
        jumpToPage(){   
            this.$emit('fetchdata');         
            let url = this.current_page_url.replace('?page='+this.current_page,'?page='+this.jumpTo);
            if(this.current_page_url.indexOf('&page') !== -1) {
                url = this.current_page_url.replace('&page='+this.current_page,'&page='+this.jumpTo);   
            }
            axios.get(url)
            .then((response) => {
                this.$emit('paginate',response);
                this.jumpTo = "";
            })
            .catch((error) => {
                Swal.fire('Error','Failed to load data!','error');
            });
        },       
        paginate(url){
            this.$emit('fetchdata');
            axios.get(url)
            .then((response) => {
                this.$emit('paginate',response);
            })
            .catch((error) => {
                Swal.fire('Error','Failed to load data!','error');
            })
        }
    }
}
</script>

