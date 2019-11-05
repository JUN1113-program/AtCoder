h, w, a, b = gets.split.map(&:to_i)

h_array = []
n = 0
m = 0
if h % w == 0 || w % h == 0
  h.times do
    w_array = []
    w.times do
      w_array << 0
    end
    m = n * a
    if m >= w
      n = 0
    end
    m = n * a
    a.times do
      w_array[m] = 1
      m += 1
    end
    h_array << w_array
    n += 1
  end
else
  puts "No"
end

h_array.each do |line|
  print line.join
  puts
end