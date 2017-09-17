function every_second(lst) {
    if (is_empty_list(lst) || is_empty_list(tail(lst))) {
        return [];
    } else {
        return pair(head(tail(lst)), every_second(tail(tail(lst))));
    }
}