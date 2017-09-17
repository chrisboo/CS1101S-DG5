function sums(lst) {
    if (is_empty_list(lst)) {
        return list(0, 0);
    } else if (is_empty_list(tail(lst))) {
        return list(head(lst), 0);
    } else {
        var rest = sums(tail(tail(lst)));
        return list(head(lst)       + head(rest),
                    head(tail(lst)) + head(tail(rest)));
    }
}