<template>
    <div>
        <div class="container-fluid" id="top_hd_req">
            <div class="row">
                <div class="col-md-6">
                    <button id="btn_truck">
                        <font-awesome-icon icon="shipping-fast" size="2x" />
                    </button>
                    <!-- Heading -->
                    <div class="col-md-12 py-4" style="background-color:#261c6a;">
                        <h3>Request Quote</h3>
                    </div>
                    <!-- Form -->
                    <div class="container">
                        <div class="row py-3 px-0">
                            <div class="col-md-12">
                                <form method="post">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Full Name" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Email Address" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <select name="des_from" id="des_from" class="form-control" placeholder="Email Address" required>
                                                <option value="">Destination From</option>
                                                <option v-for="(country,i) in countries" :key="i" :value="country"> {{ country }} </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <select name="des_to" id="des_to" class="form-control" placeholder="Email Address" required>
                                                <option value="">Destination To</option>
                                                <option v-for="(country,i) in countries" :key="i" :value="country"> {{ country }} </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <select name="log_type" id="log_type" class="form-control" placeholder="Email Address" required>
                                                <option value="">Logistic Type</option>
                                                <option v-for="type in logistic_types" :key="type" :value="type">{{ type }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <textarea name="message" id="message" rows="10" class="form-control" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text text-light" style="border-radius:0; background-color:#261c6a;">
                                                        <font-awesome-icon icon="paper-plane" />
                                                    </span>
                                                    <button type="submit" class="btn btn-primary form-control">
                                                        REQUEST QUOTE
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Heading -->
                    <div class="col-md-12 py-4" style="background-color:#ff7900;">
                        <h3>Get In touch</h3>
                    </div>
                    <!-- FAQ -->
                    <div class="container">
                        <div class="row py-3 px-0 mx-0">
                            <div class="col-md-12">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Collapsible Group Item #1
                                            </button>
                                        </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Collapsible Group Item #2
                                            </button>
                                        </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Collapsible Group Item #3
                                            </button>
                                        </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            countries: [
                'African',
                'Europe',
                'United State',
                'China',
                'Canada'
            ],
            logistic_types:[
                'Ocean Freight Services',
                'Air Freight Services',
                'Road and Rail Freight Services',
            ]
        }
    }
}
</script>

<style scoped>
    #top_hd_req{
        text-align: center;
        color: white;
        font-weight: 900;
        text-transform: uppercase;
    }
    #btn_truck{
        /* padding: 5px 10px; */
        height: 60px;
        width: 60px;
        border-radius: 100%;
        float: right;
        margin-right: -45px;
        margin-top: 15px;
        z-index: 4;
        position: inherit;
    }
    @media screen and (max-width: 767px) {
        #btn_truck{
            display:none;
        }
    }
</style>