function construct_town-town_edges(n, d, garbage_information) {
  for town t ∈ [1,...,n]:
    i = 1
    while day i < d:
      add edge (s,(t,i))
      
      find the latest possible day j that makes the garbage between day i and day j (inclusive) in town t not exceed 1
      
      add edge ((t,i), (t,j))
      
      for day k ∈ [i+1,...,j-1]:
        add edge ((t,i), (t,k))
        
      i = j+1
}
