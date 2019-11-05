N, K = gets.split.map(&:to_i)
h = gets.split.map(&:to_i)
i = 0
h.each do |man|
  if man >= K
    i += 1
  end
end
puts i