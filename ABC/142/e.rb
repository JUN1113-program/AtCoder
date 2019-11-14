N, M = gets.split.map(&:to_i)
A = []
B = []
C = []
M.times do
  num = gets.split.map(&:to_i)
  A << num[0]
  B << num[1]
  C << gets.split.map(&:to_i)
end
print "#{A} \n"
print "#{B} \n"
print "#{C} \n"

# 一番安いやつの配列
cost = []
100.times do
  cost << 100000
end

C.each.with_index do |c,i|
  if c.length == 1
    if A[i] < cost[c.join.to_i]
      cost[c.join.to_i] = A[i]
    end
  end
end

sumcosts = []
nes = []
C.each.with_index do |c, i|
  sum = 0
  sumcost = {}
  sumcost[:num] = []
  if c.length > 1
    c.each do |cs|
      sum += cost[cs]
      puts cost[cs]
      sumcost[:num] << cs
      if cost[cs] == 100000
        sumcost[:cost] = A[i]
        nes << sumcost
      end
    end
    if sum > A[i]
      sumcost[:cost] = A[i]
      sumcosts << sumcost
    end
  end
end

print sumcosts
puts

print nes
puts

cost.delete(100000)
costed = 0
cost.each do |cos|
  costed += cos
end

puts costed