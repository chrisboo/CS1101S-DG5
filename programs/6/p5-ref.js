function permutations(s) {
    if (is_empty_list(s)) {
        return list([]);
    } else {
        return accumulate(append, [],
                          map(function(x) {
                                  return map(function(p) {
                                                 return pair(x, p);
                                             }, 
                                             permutations(remove(x, s)));
                          }, s));
    }
}