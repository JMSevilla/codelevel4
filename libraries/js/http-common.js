const tools = { 
    app : 'app/',
    helper: 'Http/helpers'
}

const state = { 
    create(obj, resolve) {
        request.querystring("/registerHelper.php", obj, resolve);
    }
}

const asynchronous = { 
    async promisingall(obj){ 
        await Promise.all([this.__construct(obj)]);
    },
    async __construct(obj) { 
         const promise = new Promise((resolve) => {
             state.create(obj, resolve);
         })
         await promise.then(response => {
             console.log(response);
         })
    }
}

const request = { 
    querystring(url, obj, resolve) { 
        return $.post(tools.app + tools.helper + url, obj, (response) => {
            resolve(response);
        })
    }
}

export default {
    asynchronous
}