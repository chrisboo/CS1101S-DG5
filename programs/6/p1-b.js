function remove_duplicates(lst) {
    return accumulate(
               function(x, xs) {
                   return pair(x, remove_all(x, xs)); 
               }, [], lst);
}