N = gets.to_i
i = 0
N.times do |n|
  if n % 2 == 0
    i += 1
  end
end

puts i/N.to_f