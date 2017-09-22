function permutations_r(s, r) {
    if (r === 0) {
        return list([]);
    } else {
        return accumulate(append, [],
                          map(function(x) {
                                  return map(function(p) {
                                                 return pair(x, p);
                                             }, 
                                             permutations_r(remove(x, s), r - 1));
                          }, s));
    }
}