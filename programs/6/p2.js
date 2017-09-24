function makeup_amount(x, l) {
    if (is_pair(l)) {
        return append(map(function(y) { return append(list(head(l)), y); },
                          makeup_amount(x - head(l), tail(l))),
                      makeup_amount(x, tail(l)));
    } else if (x === 0) {
        return list([]);
    } else {
        return [];
    }
}