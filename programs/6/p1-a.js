function same_as(h) {
    return function(x) {
               return h !== x;
           }
}

function remove_duplicates(lst) {
    if (length(lst) === 1) {
        return lst;
    } else {
        return pair(head(lst), filter(same_as(head(lst)), remove_duplicates(tail(lst))));
    }
}