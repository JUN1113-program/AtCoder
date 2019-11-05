N = gets.to_i
L = gets.to_s.split.map(&:to_i)
L.sort! {|a, b| b <=> a }

count = 0


puts count