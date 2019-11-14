S = gets.to_s.chomp
K = gets.to_i
times = 0
count = 1
add = 0
first = 0
last = 0
firstword = ""
lastword = ""
S.length.times do |i|
  if S[i] != nil
    if S[i] == S[i+1]
      count += 1
    else
      if first == 0
        first = count
        firstword = S[i]
      end
      if i == (S.length - 1)
        last = count
        lastword = S[i]
      end
      times += count/2
      count = 1
    end
  end
end

if firstword == lastword
  if first != false && last != false
    if first.odd? && last.odd?
      unless (first + last).odd?
        add = K - 1
      end
    end
  end
end

if S.length == 1
  add = K/2
end

puts times * K + add