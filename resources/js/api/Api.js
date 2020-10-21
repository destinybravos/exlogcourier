import axios from 'axios'

class Api {
   constructor () {
    //   const domain   = process.env.MIX_API_DOMAIN,
    //         protocol = process.env.MIX_API_PROTOCOL,
    const domain   = 'exlogcourier.com/api',
            protocol = 'https',
   // const domain   = 'exlog.com/api',
   //          protocol = 'http',
            apiUrl   = `${protocol}://${domain}`;

      this.client = axios.create({
         baseURL: apiUrl
      })
   }

}

const api = new Api();

window.api = api;

export default api
