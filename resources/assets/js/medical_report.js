import Pagination from './components/Pagination.vue';
import axios from 'axios';
const urls = {
    index:'/sec_reports/medical-data-index',
    diagnosis:'/sec_reports/medical-data-diagnosis',
    location:'/sec_reports/medical-data-locations'
};

const components = {
    Pagination
};

const data = {
    diagnos: "",
    age:"",
    location:"",
    gender:"",
    results: [],
    diagnosis: [],
    locations: [],
    next_page_url: "",
    prev_page_url: "",
    current_page_url: "",
    current_page: "1",
    total: 0
}

const methods = {  
    index() {
        axios.get(urls.index,{
            params:{
                diagnosis: this.diagnos,
                age: this.age,
                gender: this.gender,
                location: this.location
            }
        })
        .then(response => this.paginatedData(response))
        .catch(error => Swal.fire('error', 'Failed to load data!', 'error'));
    },
    paginatedData(response) {
        this.results = response.data.data;
        this.next_page_url = response.data.next_page_url;
        this.prev_page_url = response.data.prev_page_url;
        this.current_page_url = response.data.path
            + '?diagnosis=' + this.diagnosis
            + '&age=' + this.age
            + '&location=' + this.location
            + '&gender=' + this.gender
            + '&page=' + response.data.current_page;
        this.current_page = String(response.data.current_page);
        this.total = response.data.total;
    },
    getDiagnosis() {
        axios.get(urls.diagnosis)
            .then(response => this.diagnosis = response.data)
            .catch(error => console.log('error loading diagnosis'));
    },

    getLocations() {
        axios.get(urls.location)
            .then(response => this.locations = response.data)
            .catch(error => console.log('error loading locations'));
    },
    getAge(dateString) {
        var today = new Date();
        var birthDate = new Date(dateString);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        return age;
    },
    fetchData() {
        this.current_page = 'Fetching...';
    },
};

const vm = new Vue({
    el: '#app',
    data: data,
    methods: methods,
    components:components,
    mounted() {
        this.index();
        this.getDiagnosis();
        this.getLocations();
    }
});
