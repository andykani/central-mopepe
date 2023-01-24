export const deferedAction = (cb, timeout, id) => {

    
    if(id === null){
        const newID = window.setTimeout(cb, timeout)
        return newID

    }else {

        clearTimeout(id)
        const newID = window.setTimeout(cb, timeout)
        return newID
    }
}